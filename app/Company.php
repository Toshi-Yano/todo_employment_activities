<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function interviews()
    {
        return $this->hasMany('App\Interview');
    }

    public function route()
    {
        return $this->belongsTo('App\Route');
    }

    public function getSituationNameAttribute(){
        return config('situations.'.$this->situation_id);
    }
}
