<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\billet;
use Faker\Generator as Faker;

$factory->define(billet::class, function (Faker $faker) {
    return [
        'date'=>$faker->dateTime($max='now',$timezone=null),
        'id_psg'=>$faker->sentence($nbWords = 9, $variableNbWords = true)

    ];
});
