<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    function user(){
        return $this->belongsTo('App\User');
    }
}
