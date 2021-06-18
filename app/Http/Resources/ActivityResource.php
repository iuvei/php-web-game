<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ActivityResource extends JsonResource
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
            'id' => $this['id'],
            'title' => $this['title'],
            'image' => Storage::disk('admin')->url($this['image']),
            'href' => $this['href'],
            'start_time' => $this['start_time'],
            'end_time' => $this['end_time'],
        ];
    }
}
