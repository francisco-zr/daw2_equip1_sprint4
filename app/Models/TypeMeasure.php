<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMeasure extends Model
{
    use HasFactory;

    protected $table = 'type_measures';
    protected $fillable = [
        'name',
        'hidden'
    ];

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }
}
