<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionQuestionnaire extends Model
{
    use HasFactory;

    protected $table = 'question_questionnaire';
    protected $fillable = [
        'question_id',
        'questionnaire_id'
    ];

    public function questionnaires()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
