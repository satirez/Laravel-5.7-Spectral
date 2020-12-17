<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->engine = 'InnoDB';


            $table->increments('id');
            $table->integer('psicologo_id')->unsigned();
            $table->integer('paciente_id')->unique()->unsigned();
            $table->integer('terapia_id')->unsigned()->nullable();

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('motivoconsulta',30)->nullable();
            $table->string('diagnostico',30)->nullable();
            $table->string('medicado',29)->nullable();
            $table->string('drogas',29)->nullable();
            $table->string('discapacitado',29)->nullable();
            $table->integer('derivadode_id')->unsigned()->nullable();
            $table->integer('sexualorientation_id')->unsigned()->nullable();
            $table->integer('civilstate_id')->unsigned()->nullable();
            $table->string('alta',30)->nullable();
            $table->string('severidad',30)->nullable();

// RELACIONES
            $table->foreign('psicologo_id')->references('id')->on('users');
            $table->foreign('paciente_id')->references('id')->on('users');
            $table->foreign('terapia_id')->references('id')->on('terapies');
            $table->foreign('derivadode_id')->references('id')->on('derivados');
            $table->foreign('sexualorientation_id')->references('id')->on('sexual_orientations');
            $table->foreign('civilstate_id')->references('id')->on('civil_states');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
