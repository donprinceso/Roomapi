<?php

namespace App\Http\Resources\API\Rooms;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RoomserviceCollection extends Resource
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
            'room_no'=>$this->room_no,
            'price'=>$this->price,
            'href'=>[
                'link'=>route('rooms.show',$this->id)
            ]
        ];
    }
}
