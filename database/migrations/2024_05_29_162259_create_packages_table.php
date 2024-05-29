<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('description');
            $table->string('addressee');
            $table->string('adress');
            $table->timestamps();

             //Atributos foraneos
             $table->unsignedBigInteger('truck_driver_id')->nullable();
              //referenciando la tabla users
            $table->foreign('truck_driver_id')
            ->references('id')
            ->on('truck_drivers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
