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
        Schema::create('marcas', function (Blueprint $table) {
            $table->id('idMarca');
            $table->string('marca', 45);
            $table->timestamps();


            $table->unsignedBigInteger('vehiculo_id')-> unique();
            //PARAA ESTADO RELACION UNO A MUCHOS 
            //Restricciones de la llave foranea 
            $table->foreign('vehiculo_id')
            ->references('idVehiculo')
            -> on('vehiculos')
               // Set null significa: que si se borran o se actualizan datos el campo quede en null
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
    }
};
