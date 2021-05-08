<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Join_event;
use Faker\Generator as Faker;

$factory->define(Join_event::class, function (Faker $faker) {
    return [
        'name_joiner'=>$faker->word,
        'email_joiner'=>$faker->freeEmail,
        'tel_joiner'=>$faker->e164PhoneNumber ,
        'date_naissance_joiner'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'adresse_joiner'=>$faker->secondaryAddress   
    ];
});
