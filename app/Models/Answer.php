<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $fillable = [
        'name',
        'recommendation',
        'risk_id',
        'intervention_id',
        'type_measure_id',
        'probability_id',
        'impact_id',
        'question_id',
        'hidden',
    ];


    public function results(): BelongsToMany
    {
        return $this->belongsToMany(Result::class)->withTimestamps();
    }

    public function impacts()
    {
        return $this->belongsTo(Impact::class);
    }

    public function risks()
    {
        return $this->belongsTo(Risk::class);
    }

    public function interventions()
    {
        return $this->belongsTo(Intervention::class);
    }

    public function typemeasures()
    {
        return $this->belongsTo(TypeMeasure::class);
    }

    public function probabilities()
    {
        return $this->belongsTo(Probability::class);
    }

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
