<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->engine = 'InnoDB';


            $table->increments('id');
            $table->string('name',80);
            $table->integer('sesion_id')->unsigned();
            $table->string('estado');
            $table->timestamps();

            $table->foreign('sesion_id')->references('id')->on('sessions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
