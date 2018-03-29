<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
