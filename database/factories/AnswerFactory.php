<?php

namespace Database\Factories;

use App\Models\Impact;
use App\Models\Intervention;
use App\Models\Probability;
use App\Models\Question;
use App\Models\Risk;
use App\Models\TypeMeasure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $risk_id = Risk::all()->pluck('id')->toArray();
        $intervention_id = Intervention::all()->pluck('id')->toArray();
        $type_measure_id = TypeMeasure::all()->pluck('id')->toArray();
        $probability_id = Probability::all()->pluck('id')->toArray();
        $impact_id = Impact::all()->pluck('id')->toArray();
        $question_id = Question::all()->pluck('id')->toArray();

        return [
            'name' => $this->faker->unique()->name(),
            'recommendation' => $this->faker->text(),
            'risk_id' => $this->faker->randomElement($risk_id),
            'intervention_id' => $this->faker->randomElement($intervention_id),
            'type_measure_id' => $this->faker->randomElement($type_measure_id),
            'probability_id' => $this->faker->randomElement($probability_id),
            'impact_id' => $this->faker->randomElement($impact_id),
            'question_id' => $this->faker->randomElement($question_id),
            'hidden' => $this->faker->date(),
        ];
    }
}
