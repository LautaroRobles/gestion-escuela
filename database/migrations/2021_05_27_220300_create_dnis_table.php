<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnis', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento');
            $table->string('nro_documento');
            $table->enum('posesion', ['Posee', 'En Tramite', 'No Posee'])->default('Posee');
            $table->enum('estado_documento', ['Bueno', 'Malo'])->default('Bueno');
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
        Schema::dropIfExists('dnis');
    }
}
