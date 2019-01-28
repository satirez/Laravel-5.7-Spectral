<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'name' => 		$faker->word,
		'sesion_id' => 	$faker->numberBetween($min = 1, $max = 15),
		'estado' =>     $faker->word
    ];
});
