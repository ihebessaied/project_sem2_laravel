<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    //
    public function Billet(){
        return $this->belongsTo('App\Vole');
    }
}
