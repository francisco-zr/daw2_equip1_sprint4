<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_id = User::all()->pluck('id')->toArray();
        return [
            'qualification'=>$this->faker->numberBetween($min = 0, $max = 10),
            'user_id'=>$this->faker->randomElement($user_id), 
            'description'=>$this->faker-> text(50),
            'hidden'=> $this->faker->date(),
        ];
    }
}
