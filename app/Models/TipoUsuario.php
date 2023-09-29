<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'idTipousuario';


    //Relacion uno a muchos 
    public function user()
    {
        return $this->hasMany('App\Models\User');
    } 

}
