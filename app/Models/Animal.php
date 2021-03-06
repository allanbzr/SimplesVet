<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animal';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'IdCliente',
        'Nome',
        'Raca',
        'Especie',
        'HistoricoClinico',
        'Nascimento',
    ];
}
