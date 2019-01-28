<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psicologo_id')->unsigned();
            $table->integer('sesion_id')->unsigned();
            $table->string('descripcion',140);
            $table->integer('level_id')->unsigned();
            $table->datetime('fecha');

            $table->foreign('psicologo_id')->references('id')->on('users');
            $table->foreign('sesion_id')->references('id')->on('sessions');
            $table->foreign('level_id')->references('id')->on('levels');

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
        Schema::dropIfExists('observations');
    }
}
