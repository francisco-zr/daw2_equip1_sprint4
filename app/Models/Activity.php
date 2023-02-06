<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    // Camps de la taula a replenar (El id i el timespace no es fiquen)
    protected $fillable = [
    'name',
    'description',
    'start_date',
    'final_date',
    'category_id',
    'hidden'
    ];

}
