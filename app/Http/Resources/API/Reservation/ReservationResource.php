<?php

namespace App\Http\Resources\API\Reservation;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends Resource
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
            'name'=>$this->name,
            'phone'=>$this->phone,
            'staff_id'=>$this->staff_id,
            'duration'=>$this->duration,
            'check_in'=>$this->check_in,
            'check_out'=>$this->check_out,
            'total_price'=>$this->price * $this->duration,
        ];
    }
}
