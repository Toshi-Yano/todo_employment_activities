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

    public function getSituationNameAttribute()
    {
        return config('situations.'.$this->situation_id);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($company) {
            $company->interviews()->delete();
        });
    }

    public function scopeCurrent($query)
    {
        return $query->where('situation_id', '1');
    }

    public function scopeOffered($query)
    {
        return $query->where('situation_id', '2');
    }

    public function scopeDefeat($query)
    {
        return $query->where('situation_id', '3');
    }
}
