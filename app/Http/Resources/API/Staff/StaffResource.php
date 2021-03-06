<?php

namespace App\Http\Resources\API\Staff;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'password'=>$this->password,
            'href'=>[
                'link'=> route('reservations.index',$this->id)
            ]
        ];
    }
}
