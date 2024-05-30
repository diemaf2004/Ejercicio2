<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck_driver extends Model
{
    public function trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }  

    public function packages(){
        return $this->hasMany('App\Models\Package');
    }
}
