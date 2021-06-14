<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LotteryOrder extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;
    use HasFactory;

    protected $table = 'lottery_order';

    protected $fillable = ['bonus', 'status'];

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function lottery_record()
    {
        return $this->belongsTo(\App\Models\LotteryRecord::class);
    }

    public function lottery_rule()
    {
        return $this->belongsTo(\App\Models\LotteryRule::class);
    }
    
    public function scopeStatus($query,$status)
    {
        if ($status)
        {
            return $query->where('status', $status);
        }
        return $query;
    }
    
  

}
