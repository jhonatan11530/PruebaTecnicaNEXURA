<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'empleado';
    protected $fillable = [
        'nombre','email','sexo','area_id','boletin','descripcion'
    ];
}
