<?php

namespace Database\Factories;

use app\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $course_id = Course::all()->pluck('id')->toArray();

        return [
            'rating'=>$this->faker->name(255),
            'feedback'=>$this->faker->name(255),
            'course_id'=>$this->faker->randomElement($course_id),
            'hidden'=>$this->faker->date()
        ];
    }
}
