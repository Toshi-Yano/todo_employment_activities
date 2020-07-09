<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function interviews()
    {
        return $this->hasMany('App\Interview');
    }

    public function routes()
    {
        return $this->belongsTo('App\Route');
    }
}
