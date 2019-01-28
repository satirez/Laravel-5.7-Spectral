<?php

use Faker\Generator as Faker;

$factory->define(App\Institution::class, function (Faker $faker) {
    return [
        
      	'name' => 		$faker->company,
		'direccion' => 	$faker->streetAddress,
		'rut' => 		$faker->ssn,
		'region_id' =>  $faker->numberBetween($min = 1, $max = 15),
        'comuna_id' =>  $faker->numberBetween($min = 1, $max = 346),
        'lat' => 		$faker->latitude($min = -18, $max = -50),   // 77.147489
        'lng' => 		$faker->longitude($min = -73, $max = -69 ),  // 86.211205
		'fono' => 		$faker->e164PhoneNumber,
        'sitioweb' =>   $faker->safeEmailDomain,
        'logo' =>       $faker->imageUrl($width = 640, $height = 480),
		'categoria_id' => rand(1,2),
    ];
});
