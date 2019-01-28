<?php

use Illuminate\Database\Seeder;

class DisordersDiseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = \Carbon\Carbon::now();
        $enfermedades = [
            
            [1,'Fobias'],
            [2,'Ansiedad Generalizada'],
            [3,'Ataques de Panico'],
            [4,'Fobia Social'],
            [5,'Obseciones y Compulsiones'],
            [6,'Estres postraumatico'],
            [7,'Trastornos Histrionicos'],
            [8,'Dependiente'],
            [9,'Antisocial'],
            [10,'Narcisista'],
            [11,'Obsesivo Compulsivo'],
            [12,'Evitador Depresivo'],
            [13,'Esquizoide'],
            [14,'Depresión'],
            [15,'Distimia'],
            [16,'Duelo'],
            [17,'Baja Estima'],
            [18,'Timidez'],
            [19,'Agresividad'],
            [20,'Ira'],
            [21,'Deficit de Asertividad'],
            [22,'Insomnio'],
            [23,'Paralisis del sueño'],
            [24,'Problemas de comunicación'],
            [25,'Entrenamiento en solución de Problemas'],
            [26,'Celos'],
            [27,'Trastorno de deseo'],
            [28,'Anorgasmia'],
            [29,'Dispareunia'],
            [30,'Vaginismo'],
            [31,'Problemas de Erección'],
            [32,'Eyeculación Precoz'],
            [33,'Eyaculación Retardada'],
            [34,'Anorexia'],
            [35,'Bulimia'],
            [36,'Obsesidad'],
            [37,'Trastorno por atracón'],
            [38,'Tabaquismo'],
            [39,'Ludopia'],
            [40,'Internet'],
            [41,'Pornografia'],
            [42,'Videojuegos'],
            [43,'Masturbación'],
            [44,'Despersonalización'],
            [45,'Amnesia'],
            [46,'Fuga Disociativa'],
            [47,'Trastorno de identidad']

        ];
        $enfermedades = array_map(function($enfermedad) use ($now) {
           return [
               'id' => $enfermedad[0],
               'name' => $enfermedad[1],
               'updated_at' => $now,
               'created_at' => $now,
           ];
        }, $enfermedades);
        DB::table('diseases')->insert($enfermedades);


        /* */

         $now = \Carbon\Carbon::now();
        $tiposervicios = [
            

            [1,'A'],
            [2,'B'],
            [3,'C'],
            [4,'D'],

        ];
        $tiposervicios = array_map(function($tiposervicio) use ($now) {
           return [
               'id' => $tiposervicio[0],
               'name' => $tiposervicio[1],
               'updated_at' => $now,
               'created_at' => $now,
           ];
        }, $tiposervicios);
        DB::table('fonasas')->insert($tiposervicios);

        $now = \Carbon\Carbon::now();
        $nivels = [
            

            [1,'E'],
            [2,'D'],
            [3,'C3'],
            [4,'C2'],
            [5,'C1b'],
            [6,'C1a'],
            [7,'AB'],
        ];
        $nivels = array_map(function($nivel) use ($now) {
           return [
               'id' => $nivel[0],
               'name' => $nivel[1],
               'updated_at' => $now,
               'created_at' => $now,
           ];
        }, $nivels);
        DB::table('socio_economics')->insert($nivels);

    }
}
