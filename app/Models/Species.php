<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $table = 'especie';

    public $timestamps = false;

    protected $fillable = [
        'Especie',
    ];
}
