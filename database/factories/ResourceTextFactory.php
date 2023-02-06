<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResourceTextFactory extends Factory
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
            'description'=>$this->faker->city(255),
            'category_id'=>$this->faker->randomElement($category_id),
            'hidden'=>$this->faker->date(),

        ];
    }
}
