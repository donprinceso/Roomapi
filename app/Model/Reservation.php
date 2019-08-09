<?php

namespace App\Model;

use App\Model\Roomservice;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[];
    
    public function roomservice(){
        
        return $this->hasMany(Roomservice::class, 'room_no', 'local_key');
    }
}

