<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table='pregunta';

    protected $primaryKey='id';

    protected $fillable =[
        'pregunta',
        'fk_pregunta',  //Recursiva
        'tipo',
        'fk_investigacion'
    ];

    protected $guarded =[
        'id',
    ];
}
