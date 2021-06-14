<?php

namespace App\Console\Commands;

use App\Jobs\Lottery;
use App\Models\LotteryRecord;
use Illuminate\Console\Command;

class lhc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'open:lhc {lottery=11}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '六合彩';

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
        $code = range(1,49);
        shuffle($code);
        $code = array_slice($code,0,7);

        $lottery_record = LotteryRecord::where('lottery_time','<=',time())->where('lottery_id',$id)->orderby('id','desc')->first();
        // $lottery_record = LotteryRecord::where('issue','202106071099')->where('lottery_id',1)->orderby('id','desc')->first();
        if(!$lottery_record->code)
        {
            $lottery_record->code = $code;
            $lottery_record->save();
        }

        Lottery::dispatch($lottery_record);
        echo "彩种:六合彩 - 期号：{$lottery_record->issue} - 开奖号码: {$lottery_record->code} \n";
    }
}
