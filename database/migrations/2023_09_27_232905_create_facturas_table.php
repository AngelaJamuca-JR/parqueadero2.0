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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('idfactura');
            $table->dateTime('horaEntrada');
            $table->dateTime('horaSalida');
            $table->double('valor');
            $table->timestamps();




            
            //Referencia a la otra tabla  del mismo tipo (integer)
            $table->unsignedBigInteger('vehiculo_id')-> unique();

            //Restricciones de la llave foranea 
            $table->foreign('vehiculo_id')
                  ->references('idVehiculo')
                  -> on('vehiculos')
                    // Cascada significa: que si se borran o se actualizan datos hayan cambios en las dos tablas 
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
