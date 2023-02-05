<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'name'=>$this->faker->name(),
            'course_id'=>$this->faker->randomElement($course_id),  
            'hidden'=>$this->faker->date()
        ];
    }
}
