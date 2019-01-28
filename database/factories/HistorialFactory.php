<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Historial::class, function (Faker $faker) {

    return [
        'sesion_id' => 		$faker->numberBetween($min = 1, $max = 20),
		'asistencia_id' => 	$faker->numberBetween($min = 1, $max = 5),
		'start_date' => 	$now = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 month', '+5 month')->getTimestamp()),  
        'end_date'=>        $end = $now->addHour(), 
		'duracion' =>		$faker->time($format = 'H:i:s', $max = '00:45:00') // '20:49:42'
    ];
});
