<?php

namespace App\Http\Controllers\Api;


use App\Http\Resources\ActivityResource;
use App\Http\Resources\GameClassResource;
use App\Http\Resources\GameResource;
use App\Http\Resources\HotGameResource;
use App\Http\Resources\LiveResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\VideoClassResource;
use App\Http\Resources\VideoResource;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Game;
use App\Models\GameClass;
use App\Models\Live;
use App\Models\Lottery;
use App\Models\Setting;
use App\Models\Video;
use App\Models\VideoClass;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getConfig()
    {
        try {
            $setting = Cache::rememberForever('getConfig',function (){
                $setting = Setting::Name()->first();
                $banner = Banner::Status()->get();
                return collect($setting->content)->merge(['banner' => $banner->toArray()]);
            });
            return SettingResource::make($setting)->additional(['code' => 0, 'message' => 'ok']);
        }catch (\Exception $e)
        {
            return $this->jsonError($e->getMessage());
        }
    }

    public function getLiveList(Request $request)
    {
        $limit = $request->input('limit', 15);
        $live = Live::orderBy('id','desc')->simplePaginate($limit);
        return LiveResource::collection($live)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  获取视频列表
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getVideo(Request $request)
    {
        $limit = $request->input('limit', 15);
        $video_class_id = $request->input('video_class_id',1);
        $list = Video::Status()->VideoClassId($video_class_id)->simplePaginate($limit);
        return VideoResource::collection($list)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  获取视频分类
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getVideoClass()
    {
        $list = VideoClass::Status()->orderBy('sort', 'desc')->simplePaginate(15);
        return VideoClassResource::collection($list)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  获取热门游戏
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getHotGame()
    {
        $lottery = Cache::rememberForever('getHotGame', function (){
            return Lottery::IsRecommend()->get()->merge(Game::IsRecommend()->get())->toArray();
        });
        return HotGameResource::collection($lottery)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  游戏分类
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getGameClass()
    {
        $game_class = Cache::rememberForever('getGameClass', function (){
            return GameClass::Status()->orderBy('sort', 'desc')->get();
        });
        return GameClassResource::collection($game_class)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  游戏列表
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getGameList(Request $request)
    {
        $class_id = $request->input('game_class_id',7);
        $limit = $request->input('limit',15);
        $game = Game::Status()->ClassId($class_id)->orderBy('sort', 'desc')->simplePaginate($limit);
        return GameResource::collection($game)->additional(['code' => 0, 'message' => 'ok']);
    }

    /**
     *  活动列表
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getActivity(Request $request)
    {
        $class_id = $request->input('activity_class_id',1);
        $limit = $request->input('limit',15);
        $activity = Activity::Status()->ClassId($class_id)->orderBy('id', 'desc')->simplePaginate($limit);
        return ActivityResource::collection($activity)->additional(['code' => 0, 'message' => 'ok']);
    }

}
