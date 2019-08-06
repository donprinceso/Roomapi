<?php

namespace App\Http\Resources\API\Events;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\JsonResource;

class EventcentanResource extends Resource
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
            'hall_no'=>$this->hall_no,
            'size'=>$this->size,
            'capacity'=>$this->capacity,
            'price'=>$this->price
        ];
    }
}
