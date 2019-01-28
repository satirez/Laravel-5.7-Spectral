<?php

use Illuminate\Database\Seeder;

class CategoryClinicsUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();
        $tiposervicios = [
            

            [1,'Privado'],
            [2,'Independiente'],

        ];
        $tiposervicios = array_map(function($tiposervicio) use ($now) {
           return [
               'id' => $tiposervicio[0],
               'name' => $tiposervicio[1],
               'updated_at' => $now,
               'created_at' => $now,
           ];
        }, $tiposervicios);
        DB::table('category_clinics')->insert($tiposervicios);

        $now = \Carbon\Carbon::now();
        $tipousuarios = [
            

            [1,'Establecimiento'],
            [2,'Director'],
            [3,'Secretaria'],
            [4,'Psicologo'],
            [5,'Paciente'],
            [6,'Admin'],

        ];
        $tipousuarios = array_map(function($tipousuario) use ($now) {
           return [
               'id' => $tipousuario[0],
               'name' => $tipousuario[1],
               'updated_at' => $now,
               'created_at' => $now,
           ];
        }, $tipousuarios);
        DB::table('user_types')->insert($tipousuarios);
    }
}
