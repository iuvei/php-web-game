<?php

namespace App\Console\Commands;

use App\Models\Lottery;
use App\Models\LotteryRecord;
use Carbon\Carbon;
use Illuminate\Console\Command;

class create_lottery_record extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:lottery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成彩票期数';

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
        $time = strtotime(date('Y-m-d',strtotime('+1 day')));
        // $time = strtotime(date('Y-m-d'));
        $lottery = Lottery::where('status', 1)->get();

        $insert = [];
        $date = date('Y-m-d');
        $d = date('Ymd',$time);
    
        foreach ($lottery as $v)
        {
            $issue = 1;
            for($i=($v->expect_time * 60);$i<=86400;){

                $insert[] = [
                    'lottery_id' => $v->id,
                    'lottery_time' => $time + $i,
                    'issue' =>  $d . str_pad($issue,4,"0",STR_PAD_LEFT),
                    'created_at' => $date,
                    'updated_at' => $date
                ];
                $issue++;
                $i = $i+$v->expect_time * 60;
            }
        }
        $time = strtotime(date('Y-m-d',strtotime('-2 day')));
        LotteryRecord::insert($insert);
        LotteryRecord::where('lottery_time','<=', $time)->delete();
        $this->info('生成成功');
    }
}
