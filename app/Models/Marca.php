<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey = 'idMarca';
    //EJEMPLO
    //protected $primaryKey='idPaciente';


    //Relacion uno a muchos 
    public function vehiculo()
    {
        return $this->hasMany('App\Models\Vehiculo');
    } 
}
