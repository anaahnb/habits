<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiarioObjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diario_objetivos', function (Blueprint $table) {
            $table->id('diario_objetivo_id');
            $table->foreignId('diario_id')->constrained('diarios');
            $table->foreignId('objetivo_id')->constrained('objetivos');
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
        Schema::dropIfExists('diario_objetivos');
    }
}
