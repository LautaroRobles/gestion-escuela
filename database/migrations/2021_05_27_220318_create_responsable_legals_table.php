<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable_legals', function (Blueprint $table) {
            $table->id();
            $table->enum('responsable', ['Padre', 'Madre', 'Tutor']);
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('nacionalidad')->default('');
            $table->enum('educacion', ['No', 'Primario', 'Secundario', 'Terciario', 'Universitario', 'No sabe'])->default('No sabe');
            $table->boolean('educacion_completa')->default(false);
            $table->boolean('vive')->default(true);
            $table->foreignId('dni_id');
            $table->foreignId('domicilio_id');
            $table->string('profesion')->default('');
            $table->boolean('jefe_de_hogar')->default(true);
            $table->string('condicion_de_actividad')->default('');
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
        Schema::dropIfExists('responsable_legals');
    }
}
