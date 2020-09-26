<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionCertificate extends Model
{
    function user(){
        return $this->belongsTo('App\User');
    }
}
