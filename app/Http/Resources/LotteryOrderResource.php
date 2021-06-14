<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class LotteryOrderResource extends JsonResource
{
    protected $status_content = [
        '1' => '中奖',
        '2' => '未开奖',
        '3' => '已返点',
        '4' => '未中奖'
    ];
    
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'order_no' => $this->order_no,
            'money' => $this->money,
            'content' => $this->content,
            'bonus' => $this->bonus,
            'status' => $this->status,
            'issue' => $this->issue,
            'code' => $this->code,
            'rate' => $this->rate,
            'title' => $this->rule_name,
            'lottery_title' => $this->lottery['title'],
            'lottery_image' => Storage::disk('admin')->url($this->lottery['image']),
            'win' => $this->bonus - $this->money,
            'created_at' =>(string)$this->created_at,
        ];
    }
}
