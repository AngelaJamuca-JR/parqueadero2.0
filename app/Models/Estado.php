<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $primaryKey= 'idEstado';


    //Relacion uno a muchos 
    public function vehiculo()
    {
         return $this->hasMany('App\Models\Vehiculo');
    } 
}
