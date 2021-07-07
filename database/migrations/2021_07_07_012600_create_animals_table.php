<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->unsignedBigInteger('Id');
            $table->unsignedBigInteger('IdCliente');
            $table->string('Nome');
            $table->string('Raca');
            $table->string('Especie');
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
        Schema::dropIfExists('animal');
    }
}
