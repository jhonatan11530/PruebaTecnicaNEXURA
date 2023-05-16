<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    protected $table = 'areas';
    protected $fillable = [
        'nombre'
    ];
}
