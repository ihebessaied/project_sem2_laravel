<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use App\Commande;
use App\User;
use Faker\Generator as Faker;

$factory->define(Commande::class, function (Faker $faker) {
    return [
        //
        'taken_time' => $faker->dateTime($max = 'now', $timezone = null),
        'return_time' => $faker->dateTime($max = 'now', $timezone = null),
        'user_id' => User::get('id')->random(),
        'car_id' => Car::get('id')->random()
    ];
});
