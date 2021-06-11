<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vole extends Model
{     protected $guarded = [];
    public function Vole(){
            
            return $this->hasMany('App\Billet');
            }
            
}
