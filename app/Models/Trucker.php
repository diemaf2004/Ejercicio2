<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trucker extends Model
{
    public function trucks(){
        return $this->belongsToMany('App\Models\Truck');
    }  

    public function packages(){
        return $this->hasMany('App\Models\Package');
    }
}