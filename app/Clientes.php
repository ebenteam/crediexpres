<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;

class Clientes extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'dir_casa','dir_trabajo', 'cel_uno', 'cel_dos','created_at',
    ];
}
