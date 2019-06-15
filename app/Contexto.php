<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contexto extends Model
{
    protected $table='contexto';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'contexto',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
