<?php

namespace App\Model;

use App\Model\Reservation;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name','password'];

   public function reservations()
   {
       return $this->hasMany(Reservation::class);
   }
}
