<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contexto extends Model
{
    protected $table='contexto';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'id',
        'contexto'
    ];

    protected $guarded =[
        'id',
    ];
}
