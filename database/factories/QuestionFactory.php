<?php

namespace Database\Factories;

use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $questionnaire_id = Questionnaire::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->unique()->name(),
            'description'=> $this->faker->unique()->name(),
            'questionnaire_id'=> $this->faker->randomElement($questionnaire_id),
            'hidden'=> $this->faker->date(),
        ];
    }
}
