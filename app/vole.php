<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vole extends Model
{       public function vole(){
            return $this->hasMany('App\billet');
            }
}
