<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function stage()
    {
        return $this->belongsTo('App\Stage');
    }
}