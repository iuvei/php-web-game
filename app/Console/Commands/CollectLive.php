<?php

namespace App\Console\Commands;

use App\Models\Live;
use Illuminate\Console\Command;

class CollectLive extends Command
{
    /*
     * 屏蔽域名
     */
    protected $filtration = ['lwbf1.q217.cn', 'www.zujuba.cn'];

    protected $url = 'http://api.vipmisss.com:81/mf/';

    protected $list = ['jsonyanruyu.txt','jsonxingbaobei.txt'];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:liveList';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '采集直播';

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
        foreach ($this->list as $v)
        {
            $list = [];
            $res = file_get_contents($this->url. $v);
            $res = json_decode($res, true);
            if (!empty($res['zhubo']));
            {
                $list = array_merge($list, $res['zhubo']);
            }

            $insert = [];
            $time = time();
            $config = getConfig();
            $lottery = $config['live_game'];
            foreach ($list as $k => $v)
            {
                if($this->filtration($v['address']))
                {
                    $insert[] = [
                        'user_id' => rand(1,99999),
                        'is_video' => 1,
                        'stream' => $k . '_' .$time,
                        'image' => $v['img'],
                        'pull' => $v['address'],
                        'type' => 1,
                        'is_hot' => 0,
                        'is_recommend' => 0,
                        'lottery_id' => $lottery[array_rand($lottery)],
                        'created_at' => date('Y-m-d H:i:s'),
                    ];
                }
            }
            Live::where('is_video',1)->delete();
            Live::insert($insert);
        }
    }

    public function filtration($address)
    {
        foreach ($this->filtration as $v)
        {
            return !strstr($address, $v);
        }
    }
}
