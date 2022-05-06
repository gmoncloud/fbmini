<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource ;

class UserPostResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'written_text' => $this->written_text,
            'media_location' => $this->media_location,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
