<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LotteryRuleResource extends JsonResource
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
            'rule_id' => $this->id,
            'rate' => $this->rate,
            'rule_name' => $this->rule_name,
            'lottery_id' => $this->lottery_id,
            'rule_code' => $this->rule_code,
        ];
    }

}
