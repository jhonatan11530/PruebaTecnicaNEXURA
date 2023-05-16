<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado_rol extends Model
{
    protected $table = 'empleado_rols';
    protected $fillable = [
        'empleado_id','rol_id'
    ];
}
