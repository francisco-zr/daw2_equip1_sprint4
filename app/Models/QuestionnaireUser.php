<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireUser extends Model
{
    use HasFactory;
    protected $table = 'questionnaire_users';
    protected $fillable = [
        'questionnaire_id',
        'user_id'
    ];

    public function questionnaires()
    {
    return $this->belongsTo(Questionnaire::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
