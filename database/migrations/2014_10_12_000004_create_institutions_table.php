<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',40);
            $table->string('direccion',50);
            $table->string('rut',13)->unique();
            $table->integer('region_id')->unsigned();
            $table->integer('comuna_id')->unsigned();
            $table->double('lat',20,10)->nullable();
            $table->double('lng',20,10)->nullable();
            $table->string('fono',20)->nullable();
            $table->string('sitioweb',50)->nullable();
            $table->string('logo')->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->timestamps();


             //Relations
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('comuna_id')->references('id')->on('communes');
            $table->foreign('categoria_id')->references('id')->on('category_clinics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}


