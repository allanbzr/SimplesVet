<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'pessoas';

    public $timestamps = false;

    protected $fillable = [
        'Id',
        'Nome',
    ];
}
