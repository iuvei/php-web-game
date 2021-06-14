<?php

namespace App\Console\Commands;

use App\Models\LotteryOrder;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class statistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:statistics {type=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '系统报表统计';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $type = $this->argument('type');
        $day = $type == 1 ? Carbon::today()->toDateString() : Carbon::yesterday()->toDateString();
        $res = LotteryOrder::select(DB::raw('sum(money) as money'),DB::raw('sum(bonus) bonus'))
            ->whereDate('created_at', $day)
            ->first();
        if($res->money)
        {
            $bottom_pour = $res->money;
            $bonus = $res->bonus;
            Report::updateOrCreate(
                ['addtime' => $day],
                ['bottom_pour' => $bottom_pour, 'bonus' => $bonus, 'addtime' => $day]
            );
        }


    }
}
