<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonos extends Model
{
    protected $fillable = [
        'cuota', 'tipo_cuota', 'creditos_id', 'created_at',
    ];
}
