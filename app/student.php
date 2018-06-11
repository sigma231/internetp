<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public function payments(){
        return $this->hasMany('App\fees');
    }
}
