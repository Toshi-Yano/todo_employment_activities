<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function stage()
    {
        return $this->belongsTo('App\Stage');
    }

    public function getFormattedScheduleAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['schedule'])
            ->format('Y/m/d H:i');
    }
}