<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    use HasFactory;
    //nombre tabla
    protected $table = 'impacts';
    //campos de la tabla (excluir id  y timestamps)
    protected $fillable = [
        'name',
        'hidden'
    ];

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }

    public function tasks()
    {
        return $this->hasMany(Answer::class);
    }

}
