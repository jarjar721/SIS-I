<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table='pregunta';

    protected $primaryKey='id';

    public $timestamps=false;

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
