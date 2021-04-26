<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //
    public function User()
    {
        return $this->belongsTo(User::class);
    }


    public function Car()
    {
        return $this->belongsTo(Car::class);
    }
}
