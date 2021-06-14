<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotteryByRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'lottery_id' => 'required|integer|exists:App\Models\Lottery,id',
            'lottery_record_id' => 'required|integer',
            'list.*.rule_id' => 'required|integer|exists:App\Models\LotteryRule,id',
            'list.*.rule_code' => 'required|exists:App\Models\LotteryRule,rule_code',
            'list.*.money' => 'required',
            'list.*.content' => 'required|exists:App\Models\LotteryRule,rule_name',
        ];
    }
}
