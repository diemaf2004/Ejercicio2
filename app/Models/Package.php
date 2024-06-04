<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function truckers(){
        return $this->belongsTo('App\Models\Trucker');
}
}
