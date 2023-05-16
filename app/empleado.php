<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    public $timestamps = false;
    protected $table = 'empleado';
    protected $fillable = [
        'nombre','email','sexo','area_id','boletin','descripcion'
    ];
}
