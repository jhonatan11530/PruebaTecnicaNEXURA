<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado_rol extends Model
{
    public $timestamps = false;
    protected $table = 'empleado_rol';
    protected $fillable = [
        'empleado_id','rol_id'
    ];
}
