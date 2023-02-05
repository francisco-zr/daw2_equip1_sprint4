<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionQuestionnaire>
 */
class QuestionQuestionnaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $questionnaire_id = Questionnaire::all()->pluck('id')->toArray();
        $question_id = Question::all()->pluck('id')->toArray();
        return [
            'question_id'=> $this->faker->randomElement($question_id),
            'questionnaire_id'=> $this->faker->randomElement($questionnaire_id),
        ];
    }
}
