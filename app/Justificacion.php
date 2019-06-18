<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justificacion extends Model
{
    protected $table = 'justificacion';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'argumento',
        'tipo_argumento',
        'fk_investigacion',
        'fk_evento',
        'fk_contexto',
        'fk_temporalidad',
        'fk_unidad_estudio'
    ];

    protected $guarded = [
        'id',
    ];
}
