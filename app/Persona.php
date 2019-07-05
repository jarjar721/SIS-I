<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='pregunta';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'pregunta',
        'fk_modalidad',
        'fk_investigacion',
        'fk_tipo_investigacion',
        'fk_temporalidad'
    ];

    protected $guarded =[
        'id',
    ];
}
