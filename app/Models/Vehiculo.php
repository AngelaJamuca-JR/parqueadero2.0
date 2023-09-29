<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'idVehiculo';


     //Funcion de Relacion uno a uno 
     public function factura()
    {
        //Llamamos el modelo (En cadena) 
        //Llama a la llave foranea 
        return $this->hasOne('App\Models\Factura');
    }


        //Relacion uno a muchos 
    public function user()
    {
        return $this->hasMany('App\Models\User');
    } 


     //Relacion uno a muchos(inversa)
     public function estado()
    {
        return $this->belongsTo('App\Models\Estado',);
    }

    //Relacion uno a muchos(inversa)
    public function marca()
    {
        return $this->belongsTo('App\Models\Marca',);
    }


        //Relacion uno a muchos(inversa)
        public function tipoVehiculo()
        {
            return $this->belongsTo('App\Models\TipoVehiculo',);
        }
}
