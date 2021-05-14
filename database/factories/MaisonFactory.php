<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Maison;
use Faker\Generator as Faker;

$factory->define(Maison::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'region' => $faker->cityPrefix,
        'nombre_chombre' => $faker->randomDigit,
        'prix' => $faker->numberBetween($min = 50, $max = 500),
    ];
});
