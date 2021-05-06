<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        //
        'matricule' => $faker->bothify('##??'),
        'modele' => $faker->word,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'nbplace' => $faker->randomDigitNot(2),
        'mane_game' => $faker->randomDigitNot(3),
        'prix' => $faker->numberBetween($min = 100, $max = 1000)
    ];
});
