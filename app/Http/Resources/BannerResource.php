<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class BannerResource extends JsonResource
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
            'title' => $this['title'],
            'href' => $this['href'],
            'is_href' => $this['is_href'],
            'is_interior' => $this['is_interior'],
            'image' => Storage::disk('admin')->url($this['image']),
            'created_at' => (string)$this['created_at'],
        ];
    }
}
