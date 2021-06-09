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
        'status' => 0,
        'taken_time' => $faker->dateTime($max = 'now', $timezone = null),
        'return_time' => $faker->dateTime($max = 'now', $timezone = null),
        'house_image'=>$faker->imageUrl,  
        'prix' => $faker->NumberBetween($min = 10000, $max = 2000000),
    ];
});
