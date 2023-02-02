<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;
use app\Models\Activity;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $activity_id = Activity::all()->pluck('id')->toArray();
        $user_id = User::all()->pluck('id')->toArray();
        return [
            'locate'=>$this->faker->city(), 
            'grade'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
            'activity_id'=>$this->faker->randomElement($activity_id), 
            'user_id'=>$this->faker->randomElement($user_id), 
            
        ];
    }
}
