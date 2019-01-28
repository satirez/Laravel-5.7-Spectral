<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpresionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expresions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('sesion_id')->unsigned();
            $table->string('observation');
            $table->timestamps();

            $table->foreign('sesion_id')->references('id')->on('sessions');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('categoria_id')->references('id')->on('category_expresions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expresions');
    }
}
