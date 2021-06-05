<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billet extends Model
{
    //
    public function vole(){
        return $this->belongsTo('App\vole');
    }
}
