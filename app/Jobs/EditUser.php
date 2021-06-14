<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class EditUser implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public $tries = 5;

    public $maxExceptions = 3;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->data[0];
        $money = $this->data[1];
        $title = $this->data[2];
        $user = DB::connection('tiane')->table('cmf_user')->where('id',$id)->first();
        $before_money = $user->coin;
        $after_money = $user->coin + $money;
        $res = DB::connection('tiane')->table('cmf_user')->where('coin',$before_money)->where('id',$id)->update(['coin' => $after_money]);

        if($res)
        {
            PushLottery::dispatch(['money' => $money, 'title' => $title, 'user_nicename' => $user->user_nicename]);
            userAccountChange($id,4,$before_money,$money,$after_money,'彩票返奖');
        }else{
            return $this->release(1);
        }

    }
}
