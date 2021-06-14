<?php

namespace App\Console\Commands;

use App\Jobs\Lottery;
use App\Models\LotteryRecord;
use Illuminate\Console\Command;


class kuai_che extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'open:kc {lottery=2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '快车开奖';

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
        $id = $this->argument('lottery');
        $code = [1,2,3,4,5,6,7,8,9,10];
        shuffle($code);
        $code = implode(',', $code);
        $lottery_record = LotteryRecord::where('lottery_time','<=',time())->where('lottery_id',$id)->orderby('id','desc')->first();

        // $lottery_record = LotteryRecord::where('issue','202106131092')->where('lottery_id',$id)->orderby('id','desc')->first();
        // dd($lottery_record);
        if(!$lottery_record->code)
        {
            $lottery_record->code = $code;
            $lottery_record->save();
        }

        Lottery::dispatch($lottery_record);
        echo "彩种:一份快车 - 期号：{$lottery_record->issue} - 开奖号码: {$lottery_record->code} \n";
    }
}
