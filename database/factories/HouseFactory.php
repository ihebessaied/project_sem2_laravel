<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\House;
use App\Modele;
use Faker\Generator as Faker;

$factory->define(House::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'Emplacement' => $faker->cityPrefix,
        'nombre_chambre' => $faker->randomDigit,
        'prix' => $faker->NumberBetween($min = 10000, $max = 2000000),
    ];
});