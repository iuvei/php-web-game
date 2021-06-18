<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LiveResource extends JsonResource
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
            'user_id' => $this['user_id'],
            'image' => $this['image'],
            'pull' => $this['pull'],
            'type' => $this['type'],
            'title' => $this['title'],
            'nicename' => $this['nicename'],
            'avatar' => $this['avatar'],
            'lottery' => LotteryResource::make($this->lottery),
        ];
    }
}
