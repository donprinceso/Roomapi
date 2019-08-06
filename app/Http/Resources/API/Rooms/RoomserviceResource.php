<?php

namespace App\Http\Resources\API\Rooms;

use Illuminate\Http\Resources\Json\Resource;


class RoomserviceResource extends Resource
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
            'room_no'=>$this->room_no,
            'size'=>$this->size,
            'price'=>$this->price
        ];
    }
}
