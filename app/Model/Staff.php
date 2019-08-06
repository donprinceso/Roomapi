<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
   public function roomservice()
   {
       return $this->hasMany('App\Model\Roomservice', 'staff_id');
   }
}
