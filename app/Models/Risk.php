<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;
    protected $table = 'risks';
    protected $fillable = [
        'name',
        'hidden'
    ];

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }
}
