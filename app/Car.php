<?php

namespace App;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $guarded = ['image'];
    public function commande()
    {
        return $this->hasOne(Commande::class);
    }
    public function Modele()
    {
        return $this->belongsTo('App\Modele');
    }
}
