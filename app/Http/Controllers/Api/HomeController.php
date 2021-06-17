<?php

namespace App\Http\Controllers\Api;


use App\Http\Resources\SettingResource;
use App\Models\Live;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function getConfig()
    {
        try {
            $setting = Cache::rememberForever('getConfig',function (){
                $setting = Setting::Name()->first();
                return $setting->content;
            });
            return SettingResource::make($setting)->additional(['code' => 0, 'message' => 'ok']);
        }catch (\Exception $e)
        {
            return $this->jsonError($e->getMessage());
        }
    }

    public function getLiveList()
    {
        $live = Live::orderBy('id', 'desc')->get();
        dd($live);
    }
}
