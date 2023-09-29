<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipovehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'idTipovehiculo';


    //Relacion uno a muchos 
    public function vehiculo()
    {
        return $this->hasMany('App\Models\Vehiculo');
    } 
}
