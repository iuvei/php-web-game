<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;


class PushLottery implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data = [];
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
        $msg = [
            'msg' => [[
                '_method_' => 'winning',
                'ct' =>  $this->data['title'] .'中奖' . $this->data['money'] . '元',
                'user_nicename' => $this->data['user_nicename'],
                'level' => 1,
                'money' => $this->data['money'],
                'show_name' => $this->data['title'],
            ]]
        ];
        $msg['msg'][0]['type'] = $this->data['money'] > 500 ? 1 : 0;
        Redis::rpush('winning', json_encode($msg,JSON_UNESCAPED_UNICODE));
    }
}
