<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roomservice extends Model
{
    protected $fillable = ['room_no','size','price'];

    public function staff()
    {
        return $this->belongsTo('App\Model\Staff', 'staff_id');
    }
}
