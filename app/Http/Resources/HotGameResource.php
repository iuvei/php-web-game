<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class HotGameResource extends JsonResource
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
            'title' => $this['title'] ?? $this['name'],
            'image' => Storage::disk('admin')->url($this['image']),
            'name' => $this['code'] ?? $this['name'],
            'type' => $this['type'] ?? 0,
            'genre' => empty($this['code']) ? 1 : 2,
        ];
    }
}
