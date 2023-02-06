<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emblem extends Model
{
    use HasFactory;
    // Nom de la taula
    protected $table = 'emblems';

    // Camps de la taula a replenar (El id i el timespace no es fiquen)
    protected $fillable = [
    'name',
    'description',
    'image',
    'course_id',
    'hidden'
    ];
}
