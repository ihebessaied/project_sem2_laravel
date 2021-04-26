<?php

namespace App;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    public function commande()
    {
        return $this->hasOne(Commande::class);
    }
}
