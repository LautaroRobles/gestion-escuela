<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained();
            $table->foreignId('dni_id');
            $table->string('apellidos');
            $table->string('nombres');
            $table->enum('sexo', ['F', 'M']);
            $table->date('fecha_de_nacimiento');
            $table->string('lugar_de_nacimiento')->nullable();
            $table->string('nacionalidad');
            $table->foreignId('domicilio_id');
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
        Schema::dropIfExists('alumnos');
    }
}
