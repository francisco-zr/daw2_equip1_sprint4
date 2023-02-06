<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    //nombre tabla
    protected $table = 'results';
    //campos de la tabla (excluir id  y timestamps)
    protected $fillable = [
        'hidden',
        'answer_id',
        'report_id'
    ];

    public function answers()
    {
        return $this->belongsTo(Answer::class);
    }

    public function reports()
    {
        return $this->belongsTo(Report::class);
    }

}
