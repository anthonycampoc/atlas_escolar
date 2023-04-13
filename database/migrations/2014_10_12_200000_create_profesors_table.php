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
        Schema::create('profesors', function (Blueprint $table) {
           
            $table->id();
            $table->string('name');
            $table->integer('codigo');
            $table->string('number')->nullable();
            $table->string('last_name')->nullable();
            $table->string('telephone')->nullable();
            $table->enum('status',['ACTIVE','DEACTIVATE'])->default('ACTIVE');
            $table->string('email')->unique();
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
        Schema::dropIfExists('profesors');
    }
};
