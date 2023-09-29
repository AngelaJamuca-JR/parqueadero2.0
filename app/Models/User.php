<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'idUsuario';


    
    //Relacion uno a muchos(inversa)
    public function tipoUsuario()
    {
        return $this->belongsTo('App\Models\TipoUsuario',);
    }

     //Relacion uno a muchos(inversa)
     public function vehiculo()
     {
         return $this->belongsTo('App\Models\Vehiculo',);
     }



}
