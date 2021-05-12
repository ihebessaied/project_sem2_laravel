<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\vole;
use Faker\Generator as Faker;

$factory->define(vole::class, function (Faker $faker) {
    return [
        'date_dpr'=>$faker->dateTime($max='now',$timezone=null),
        'date_arv'=>$faker->dateTime($max='now',$timezone=null),
        'lieu_depart'=>$faker->sentence($nbWords = 9, $variableNbWords = true),
        'lieu_arrivee'=>$faker->sentence($nbWords = 9, $variableNbWords = true),
        'avion'=>$this->faker->sentence($nbWords = 9, $variableNbWords = true)
    ];
});
