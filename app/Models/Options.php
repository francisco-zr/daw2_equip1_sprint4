<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;
    //nombre tabla
    protected $table = 'options';
    //campos de la tabla (excluir id  y timestamps)
    protected $fillable = [
        'terms',
        'privacy_policy',
        'cookies_policy',
        'description'
    ];
}
