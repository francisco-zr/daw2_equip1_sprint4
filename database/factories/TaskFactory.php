<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Budget;
use App\Models\Impact;
use App\Models\Questionnaire;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //Referencia a las tablas con las que comparte llave foránea
        $user_id = User::all()->pluck('id')->toArray();
        $questionnaire_id = Questionnaire::all()->pluck('id')->toArray();
        $answer_id = Answer::all()->pluck('id')->toArray();
        $budget_id = Budget::all()->pluck('id')->toArray();
        $impact_id = Impact::all()->pluck('id')->toArray();

        return [
            'accepted' => fake()->randomElement(['Si', 'No']), //randomElement tan solo permite coger los dos elementos dentro del parentesis
            'state' => fake()->randomElement(['ToDo', 'InProgress', 'Done']),
            'start_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'final_date' => fake()->dateTimeBetween('-1 year', 'now'),
            'price' => fake()->randomFloat(2,0,100), //genera un número random con 2 decimales entre 0 y 100
            'manages' => fake()->randomElement(['Pymeralia', 'Personalmente']),
            'user_id' => $this->faker->randomElement($user_id), //hace referencia a la tabla con la que tiene llave foránea
            'questionnaire_id' => $this->faker->randomElement($questionnaire_id),
            'answer_id' => $this->faker->randomElement($answer_id),
            'budget_id' => $this->faker->randomElement($budget_id),
            'impact_id' => $this->faker->randomElement($impact_id),
            'percentage' => fake()->randomNumber(2),
            'hidden' => fake()->dateTimeBetween('-1 year', 'now'),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}