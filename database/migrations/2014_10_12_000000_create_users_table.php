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
        Schema::create('users', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nombre', 50);
            $table->string('telefono', 20);
            $table->string('apellido', 50);
            //$table->rememberToken();
            $table->timestamps();



            //Rferencia a la otra tabla  del mismo tipo (integer)
            $table->integer('tipousuario_id');
            $table->integer('vehiculo_id');

            //Restricciones de la llave foranea 
            $table->foreign('tipousuario_id')
                  ->references('idTipousuario')
                  -> on('tipousuarios')
                    // Set null significa: que si se borran o se actualizan datos el campo quede en null
                  ->onDelete('cascade');

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
        Schema::dropIfExists('users');
    }
};
