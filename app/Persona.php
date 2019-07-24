<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';

    protected $primaryKey='cedula';

    public $timestamps=false;

    protected $fillable =[
        'cedula',
        'nombre',
        'apellido',
        'nombre_2',
        'fk_usuario',
        'fk_institucion',
        'ocupacion',
        'telefono'
    ];

    protected $guarded =[
        'cedula',
    ];
}
