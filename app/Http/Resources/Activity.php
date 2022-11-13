<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Activity extends JsonResource
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
            'user_id' => $this->user_id,
            'aktivitas' => $this->aktivitas,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
         
        ];
    }
}
