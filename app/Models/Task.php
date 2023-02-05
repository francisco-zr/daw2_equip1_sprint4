<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'accepted',
        'state',
        'start_date',
        'final_date',
        'price',
        'manages',
        'user_id',
        'questionnaire_id',
        'answer_id',
        'budget_id',
        'impact_id',
        'percentage',
        'hidden'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function questionnaires(){
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers(){
        return $this->belongsTo(Answer::class);
    }

    public function budgets(){
        return $this->belongsTo(Budget::class);
    }

    public function impacts(){
        return $this->belongsTo(Impact::class);
    }
}
