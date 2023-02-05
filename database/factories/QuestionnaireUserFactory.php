<?php

namespace Database\Factories;

use App\Models\Questionnaire;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionnaireUser>
 */
class QuestionnaireUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $questionnaire_id = Questionnaire::all()->pluck('id')->toArray();
        $user_id = User::all()->pluck('id')->toArray();
        return [
            'questionnaire_id'=> $this->faker->randomElement($questionnaire_id),
            'user_id'=> $this->faker->randomElement($user_id),
        ];
    }
}
