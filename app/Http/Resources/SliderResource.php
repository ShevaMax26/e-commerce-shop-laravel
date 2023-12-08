<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'image' => $this->getImgUrl(),
            'url' => $this->url,
            'type' => $this->type,
            'order' => $this->order,
            'button' => $this->button,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
