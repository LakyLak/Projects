<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function person() 
    {
        return $this->hasOne('App\Person');
    }
}
