<?php

namespace App;
use App\Car;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    //
    public function cars()
    {
        return $this->hasOne(Car::class);
    }
}