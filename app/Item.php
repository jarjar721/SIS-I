<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table='item';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'numero',
        'descripcion',
        'fk_indicio',
        'fk_parametro',
        'fk_instrumento'
    ];

    protected $guarded =[
        'id',
    ];
}
