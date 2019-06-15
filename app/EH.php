<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EH extends Model
{
    protected $table='enunciado-holopraxico';

    protected $primaryKey='id';

    protected $fillable =[
        'pregunta',
    ];

    protected $guarded =[
        'id',
    ];
}
