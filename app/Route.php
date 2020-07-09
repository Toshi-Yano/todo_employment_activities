<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function companies()
    {
        return $this->hasMany('App\Company');
    }
}
