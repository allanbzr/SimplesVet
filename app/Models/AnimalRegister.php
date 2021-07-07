<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRegister extends Model
{
    protected $table = 'animal_registros';

    public $timestamps = false;

    protected $fillable = [
        'IdCliente',
        'IdEspecie',
        'Nome',
        'Raca',
        'HistoricoClinico',
        'Nascimento',
    ];
}
