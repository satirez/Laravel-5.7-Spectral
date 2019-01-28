<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            
            $table->increments('id');
            $table->string('name',30);
            $table->string('apellidos',30);
            $table->string('email',128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('rut',20)->unique();
            $table->string('telefono',20)->nullable();
            $table->string('sexo',10);
            $table->string('fechanacimiento')->nullable();
            $table->integer('region_id')->unsigned();
            $table->integer('comuna_id')->unsigned();
            $table->string('direccion',50);
            $table->integer('nivelse_id')->unsigned()->nullable();
            $table->integer('fonasa_id')->unsigned()->nullable();
            $table->string('estado')->nullable();
            $table->integer('user_types_id')->unsigned();
            $table->integer('institute_id')->unsigned();
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('comuna_id')->references('id')->on('communes');
            $table->foreign('nivelse_id')->references('id')->on('socio_economics');
            $table->foreign('fonasa_id')->references('id')->on('fonasas');
            $table->foreign('user_types_id')->references('id')->on('user_types');
            $table->foreign('institute_id')->references('id')->on('institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
