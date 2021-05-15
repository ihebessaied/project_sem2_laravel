<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    //protected $table = "my_events";//hatha ki yabda esm table mahoch miniscule w pluriel kima l model
    // protected $primaryKey = "id_event";//kan jit hattha id nrml fik migrations manst7a9ech bch niktbo star hatha yarrfha auto
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
