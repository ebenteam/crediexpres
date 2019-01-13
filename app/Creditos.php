<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;

class Creditos extends Model
{
    protected $fillable = [
        'fecha','capital', 'interes','int_actual','total','cuotas', 'plazo', 'fre_pago', 'cap_actual', 'utilidad_act', 'tot_actual', 'sum_abonos', 'cuo_actual', 'clientes_id','created_at',
    ];
}
