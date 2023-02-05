<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_id = Category::all()->pluck('id')->toArray();

        return [
            'name'=>$this->faker->name(255),
            'description'=>$this->faker->name(255),
            'start_date'=>$this->faker->date(),
            'final_date'=>$this->faker->date(),
            'category_id'=>$this->faker->randomElement($category_id),
            'hidden'=>$this->faker->date()
        ];
    }
}
