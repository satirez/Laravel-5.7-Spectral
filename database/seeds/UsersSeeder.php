<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\User::class,500)->create();


         App\User::create([

            'name' => 'Santiago',
            'apellidos' => 'Pérez',
            'email' => 'santiagoperez@live.cl',
            'password' => 'septile',
            'rut' => '19486800-6',
            'telefono' => '+56954846344',
            'sexo' => 'hombre',
            'fechanacimiento' => '1996-12-30',
            'region_id' => '8',
            'comuna_id' => '232',
            'direccion' =>  'Los castanos 865',
            'nivelse_id' => '4',
            'fonasa_id'=> '1',
            'estado'=> '1',
            'user_types_id'=> '6',
            'institute_id'=> '2',

        ]);

         App\User::create([

            'name' => 'Felipe',
            'apellidos' => 'Ulloa',
            'email' => 'felipeulloa@gmail.com',
            'password' => 'admin',
            'rut' => '11111111-6',
            'telefono' => '+56954846344',
            'sexo' => 'hombre',
            'fechanacimiento' => '1996-12-30',
            'region_id' => '8',
            'comuna_id' => '232',
            'direccion' =>  'Los castanos 865',
            'nivelse_id' => '4',
            'fonasa_id'=> '1',
            'estado'=> '1',
            'user_types_id'=> '6',
            'institute_id'=> '2',

        ]);


        Role::create([

            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'

        ]);

        Role::create([

            'name' => 'Suspendido',
            'slug' => 'suspended',
            'special' => 'no-access'
        ]);

        Role::create([

            'name' => 'Secretaria',
            'slug' => 'secretary',
        ]);

        Role::create([

            'name' => 'Director',
            'slug' => 'director',
        ]);

        Role::create([

            'name' => 'Psicologo',
            'slug' => 'psicologo',
        ]);

        Role::create([

            'name' => 'Paciente',
            'slug' => 'patient',
        ]);

    }
    
} 
