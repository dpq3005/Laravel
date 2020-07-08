<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    function myCompany(){
        return $this->hasMany('App\Cmp');
    }
}
