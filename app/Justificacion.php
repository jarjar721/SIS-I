<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Justificacion extends Model
{
    protected $table = 'justificacion';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'argumento',
        'tipo_argumento',
        'acerca_de'
    ];

    protected $guarded = [
        'id',
    ];
}
