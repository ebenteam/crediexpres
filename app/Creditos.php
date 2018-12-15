<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    protected $fillable = [
        'capital', 'interes', 'total','cuotas', 'plazo', 'fre_pago','cap_actual','int_actual', 'tot_actual', 'cuo_actual', 'cuo_actual', 'clientes_id','created_at',
    ];
}
