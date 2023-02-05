<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $answer_id = Answer::all()->pluck('id')->toArray();
        $report_id = Report::all()->pluck('id')->toArray();
        return [
            'hidden' => $this->faker->date(),
            'answer_id' => $this->faker->randomElement($answer_id),
            'report_id' => $this->faker->randomElement($report_id)
        ];
    }
}
