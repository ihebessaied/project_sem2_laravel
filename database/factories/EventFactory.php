<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [ 'event_label'=>$faker->word,
    'event_place'=>$faker->cityPrefix,
    'event_start'=>$faker->DateTime('1915-05-30 19:28:21', 'UTC'),
    'event_finish'=>$faker->DateTime('1915-05-30 19:28:21', 'UTC'),
    'event_image'=>$faker->imageUrl,  
    'event_description' => $faker->sentence($nbWords = 300, $variableNbWords = true),
    'user_id'=> User::all()->random()->id,
    
           ];
});
