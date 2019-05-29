<?php

namespace LogUCAB;

use Illuminate\Database\Eloquent\Model;

class Pri_Rol extends Model
{
    protected $table='rol-pri';

    public $timestamps=false;

    protected $fillable =[
        'fk_rol',  //Rol
        'fk_privilegio'  //Privilegio
    ];

}
