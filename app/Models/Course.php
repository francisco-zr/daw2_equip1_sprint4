<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    // Nom de la taula
    protected $table = 'courses';

    // Camps de la taula a replenar (El id i el timespace no es fiquen)
    protected $fillable = [
    'name',
    'description',
    'image',
    'hidden'
    ];
}
