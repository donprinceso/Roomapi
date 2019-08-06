<?php

namespace App\Http\Resources\API\Events;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EventcentanCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'hall_no'=>$this->hall_no,
            'price'=>$this->price,
            'href'=>[
                'link'=>route('events.show',$this->id)
            ]
        ];
    }
}
