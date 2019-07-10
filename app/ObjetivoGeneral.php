<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoGeneral extends Model
{
    protected $table='objetivo_general';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'objetivo',
        'proposito',
        'verbo_objetivo',
        'verbo_evento',
        'fk_pregunta'
    ];

    protected $guarded =[
        'id',
    ];
}
