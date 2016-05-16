<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
