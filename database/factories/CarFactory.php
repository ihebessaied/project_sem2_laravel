<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Modele;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        //
        'matricule' => $faker->bothify('##??'),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'nbplace' => $faker->randomDigitNot(2),
        'image'=>$faker->image(),
        'mane_game' => $faker->randomDigitNot(3),
        'prix' => $faker->numberBetween($min = 100, $max = 1000),
        'modele_id' => Modele::get('id')->random()
    ];
});