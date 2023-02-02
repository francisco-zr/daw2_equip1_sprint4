<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    //campos de la tabla que queremos que se pudean modificar o interactuar con ellos
    protected $fillable = [
        'price',
        'accepted',
        'hidden',
        'status',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
