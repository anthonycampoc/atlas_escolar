<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->unsignedBigInteger('alumno_id');
            $table->string('estado')->default('0');
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
        Schema::dropIfExists('grupo__alumnos');
    }
};
