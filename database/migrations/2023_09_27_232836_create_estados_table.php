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
        Schema::create('estados', function (Blueprint $table) {
            $table->id('idEstado');
            $table->string('estado', 10);
            $table->timestamps();

            
            //Referencia a la otra tabla  del mismo tipo (integer)
            $table->unsignedBigInteger('vehiculo_id')-> unique();
            $table->unsignedBigInteger('estado_id')-> unique();

            //Restricciones de la llave foranea 
            $table->foreign('vehiculo_id')
                  ->references('idVehiculo')
                  -> on('vehiculos')
                    // Cascada significa: que si se borran o se actualizan datos hayan cambios en las dos tablas 
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            //PARAA ESTADO RELACION UNO A MUCHOS 
            //Restricciones de la llave foranea 
            $table->foreign('estado_id')
            ->references('idEstado')
            -> on('estados')
               // Set null significa: que si se borran o se actualizan datos el campo quede en null
            ->onDelete('cascade');
            


            




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
