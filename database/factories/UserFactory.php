<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

	$gender = $faker->randomElement($array = array('Hombre','Mujer'));
    $nivelse = $faker->randomElement($array = array('E','D','C3','C2','C1b','C1a','AB'));
    $fonasa = $faker->randomElement($array = array('A','B','C','D'));
    $estado = $faker->randomElement($array = array('1','2'));

    return [

        'name' =>               $faker->firstName,
        'apellidos' =>          $faker->lastName,
        'email' =>              $faker->unique()->safeEmail,
        'password' =>           bcrypt('bamboo'),
        'rut' =>                $faker->unique()-> ssn,
        'telefono' =>           $faker->e164PhoneNumber,
        'sexo' =>               $gender,
        'fechanacimiento' =>    $faker->date($format = 'y-m-d', $max = 'now'),
        'region_id' =>          $faker->numberBetween($min = 1, $max = 15),
        'comuna_id' =>          $faker->numberBetween($min = 1, $max = 346),
        'direccion' =>          $faker->streetAddress,

        'nivelse_id' =>         $faker->numberBetween($min = 1, $max = 6),
        'fonasa_id' =>          $faker->numberBetween($min = 1, $max = 4),
        'estado' =>             $estado,

        'user_types_id' =>      $faker->numberBetween($min = 2, $max = 5),
        'institute_id' =>       $faker->numberBetween($min = 1, $max = 3),


        'remember_token' => str_random(10),
    ];
});
