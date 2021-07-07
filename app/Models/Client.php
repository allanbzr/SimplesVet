<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'cliente';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'Nome',
        'Telefone1',
        'Telefone2',
        'Email',
    ];
}
