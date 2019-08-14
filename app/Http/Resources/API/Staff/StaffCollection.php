<?php

namespace App\Http\Resources\API\Staff;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\API\Staff\StaffCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StaffCollection extends Resource
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
            'password'=>$this->password,
            'href'=>[
                'link'=>route('staffs.show',$this->id)
            ]
        ];
    }
}
