<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LotteryRecordResource extends JsonResource
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
            'issue' => $this->issue,
            'code' => $this->code,
            'lottery_time' => date('Y-m-d H:i:s',$this->lottery_time),
        ];
    }
}
