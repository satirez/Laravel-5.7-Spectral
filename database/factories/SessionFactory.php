<?php

use Faker\Generator as Faker;

$factory->define(App\Session::class, function (Faker $faker) {
    return [
        

        'psicologo_id' =>          $faker->numberBetween($min = 500, $max = 501),
        'paciente_id' =>           $faker->unique()->numberBetween($min = 150, $max = 499),
        'terapia_id' =>            $faker->numberBetween($min = 1, $max = 7),
        'start_date' =>            $faker->dateTimeBetween($startDate = '-2 month', $endDate = '+2 month', $timezone = null), 
        'end_date'=>               $faker->dateTimeBetween($startDate = '-1 month', $endDate = '+2 month', $timezone = null), 
        'motivoconsulta' =>        $faker->word,      
        'diagnostico' =>           $faker->word,
        'medicado' =>              $faker->randomElement($array = array('Si','No')),
        'drogas' =>                $faker->randomElement($array = array('Si','No')),
        'discapacitado' =>         $faker->randomElement($array = array('Si','No')),      
        'derivadode_id' =>         $faker->numberBetween($min = 1, $max = 9),
        'sexualorientation_id' =>  $faker->numberBetween($min = 1, $max = 6),
        'civilstate_id'        =>  $faker->numberBetween($min = 1, $max = 4),
        'alta' =>                  $faker->randomElement($array = array('Integral','Terapeutica','Administrativa')),
        'severidad' =>             $faker->word,

    ];
});
