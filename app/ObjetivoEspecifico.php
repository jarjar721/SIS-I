<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoEspecifico extends Model
{
    protected $table='objetivo_especifico';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'pregunta_secundaria',
        'objetivo',
        'estadio',
        'fk_objetivo_general'
    ];

    protected $guarded =[
        'id',
    ];
}
