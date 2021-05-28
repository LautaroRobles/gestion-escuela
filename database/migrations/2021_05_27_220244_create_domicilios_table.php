<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->string('calle');
            $table->string('numero')->default('');
            $table->string('piso')->default('');
            $table->string('torre')->default('');
            $table->string('departamento')->default('');
            $table->string('entre_calles')->default('');
            $table->string('otro_dato')->default('');
            $table->string('provincia')->default('');
            $table->string('distrito')->default('');
            $table->string('localidad')->default('');
            $table->string('codigo_postal')->default('');
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
        Schema::dropIfExists('domicilios');
    }
}
