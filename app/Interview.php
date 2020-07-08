<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function stages()
    {
        return $this->belongsToMany('App\Stage');
    }
}
