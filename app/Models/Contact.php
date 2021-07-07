<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contatos';

    public $timestamps = false;

    protected $fillable = [
        'IdCliente',
        'Telefone1',
        'Telefone2',
        'Email',
    ];
}
