<?php

use Faker\Generator as Faker;

$factory->define(App\Expresion::class, function (Faker $faker) {
    return [
        'level_id' => 		$faker->numberBetween($min = 1, $max = 5),
		'categoria_id' => 	$faker->numberBetween($min = 1, $max = 7),
		'sesion_id' => 		$faker->numberBetween($min = 1, $max = 20),
		'observation' =>  	$faker->word,
    ];
});
