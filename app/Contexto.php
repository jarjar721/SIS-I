<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contexto extends Model
{
    protected $table='contexto';

    protected $primaryKey='id';

    protected $fillable =[
        'contexto',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
