<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class VideoClassResource extends JsonResource
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
            'image_s' => Storage::disk('admin')->url($this['image_s']),
            'created_at' => (string)$this['created_at'],
        ];
    }
}
