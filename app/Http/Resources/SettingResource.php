<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'is_update' => $this['is_update'],
            'maintain' => $this['maintain'],
            'maintain_tips' => $this['maintain_tips'],
            'speak_limit' => $this['speak_limit'],
            'user_list_time' => $this['user_list_time'],
            'service_address' => $this['service'],
            'isnotice' => $this['is_notice'],
            'notice' => $this['notice'],
            'down_url' => $this['web_download'],
            'apk_ver' => $this['versions'],
            'apk_url' => $this['download'],
            'apk_des' => $this['apk_desc'],
            'telegram' => $this['telegram'],
            'potato' => $this['Potato'],
            'chatserver' => $this['chatserver'],
            'join_in_qq' => $this['agent_qq'],
            'join_in_wx' => $this['agent_wechat'],
            'join_in_tg' => $this['agent_telegram'],
            'is_private' => $this['is_private'],
            'banner' => BannerResource::collection($this['banner']),
            'live_type' => [
                [
                    "0",
                    "普通房间"
                ],
                [
                    "1",
                    "密码房间"
                ],
                [
                    "2",
                    "门票房间"
                ],
                [
                    "3",
                    "计时房间"
                ]
            ],
        ];
    }
}
