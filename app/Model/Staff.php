<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name','password'];

   public function reservation()
   {
       return $this->hasMany('App\Model\Reservation', 'staff_id');
   }
}
