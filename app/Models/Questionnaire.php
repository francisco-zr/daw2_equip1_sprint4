<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Questionnaire extends Model
{
    use HasFactory;

    protected $table = 'questionnaires';
    protected $fillable = [
        'name',
        'autor',
        'date',
        'hidden'
    ];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class)->withTimestamps();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function tasks(): BelongsToMany
    {
        return $this->hasMany(Task::class)->withTimestamps();
    }

}
