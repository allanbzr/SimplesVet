<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdCliente');
            $table->unsignedBigInteger('IdEspecie');
            $table->string('Nome');
            $table->string('Raca');
            $table->text('HistoricoClinico')->nullable();
            $table->string('Nascimento',15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_registros');
    }
}
