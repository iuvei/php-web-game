<?php

namespace App\Console\Commands;

use App\Models\UsersAccountChange;
use App\Models\UsersReport;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class users_report extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:report {type=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '用户报表';

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
        $res = UsersAccountChange::select('user_id', DB::raw('SUM(IF( type = 3, money, 0 )) as bottom_pour'), DB::raw('SUM(IF( type = 4, money, 0 )) as bonus'), DB::raw('DATE(created_at) as d'))
            ->whereDate('created_at', $day)
            ->groupBy('user_id', 'd')
            ->get();

        if ($res->isNotEmpty()) {
            (new UsersReport())->insertOrUpdate($res);
        }
    }
}
