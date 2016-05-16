<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function task()
    {
        return $this->hasOne('App\Task');
    }
}