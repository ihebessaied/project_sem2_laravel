<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modele;
use Faker\Generator as Faker;

$factory->define(Modele::class, function (Faker $faker) {
    return [
    'name' => $faker->cityPrefix()
        //
    ];
});