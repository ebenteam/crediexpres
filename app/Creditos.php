<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;

class Creditos extends Model
{
    protected $fillable = [
        'fecha','capital', 'interes', 'total','cuotas', 'plazo', 'fre_pago','cap_actual','int_actual', 'tot_actual', 'cuo_actual', 'cuo_actual', 'clientes_id','created_at',
    ];
}
