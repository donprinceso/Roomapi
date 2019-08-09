<?php

namespace App\Http\Resources\API\Reservation;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ReservationCollection extends Resource
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
            'name'=>$this->name,
            'phone'=>$this->phone,
            'duration'=>$this->duration,
            'total_price'=>$this->price * $this->duration,
            'href'=> [
                'link'=>route('reservations.show',$this->id)
            ]
        ];
    }
}
