<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pri_Rol extends Model
{
    protected $table='rol-pri';

    public $timestamps=false;

    protected $fillable =[
        'codigo_rol',  //Rol
        'codigo_pri'  //Privilegio
    ];

}
