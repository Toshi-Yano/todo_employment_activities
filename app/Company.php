<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function routes()
    {
        return $this->belongsToMany('App\Route');
    }
}
