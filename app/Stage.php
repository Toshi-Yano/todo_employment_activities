<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function interviews()
    {
        return $this->hasMany('App\Interview');
    }
}