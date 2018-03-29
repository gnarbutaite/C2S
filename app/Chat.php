<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public $table = 'chat';

    public function advertisement(){
        return $this->belongsTo('App\Advertisement');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }

}

