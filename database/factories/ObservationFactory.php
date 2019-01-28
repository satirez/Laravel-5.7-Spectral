<?php

use Faker\Generator as Faker;

$factory->define(App\Observation::class, function (Faker $faker) {
    return [
         
        'psicologo_id' =>          $faker->numberBetween($min = 500, $max = 501),
        'sesion_id' =>         	   $faker->numberBetween($min = 1, $max = 20),
        'descripcion' =>           $faker->word,
        'level_id' =>              $faker->numberBetween($min = 1, $max = 5),
        'fecha' =>           	   $faker->dateTimeBetween($startDate = '-1 month', $endDate = '+2 month', $timezone = null), 
    ];
});
