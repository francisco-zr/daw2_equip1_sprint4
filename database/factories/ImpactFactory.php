<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Impact>
 */
class ImpactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //$this per referir-nos al objecte
            //faker llibreria on hi ha molts tipus de dades
            'name' => $this->faker->unique()->name(),   
            // unique diu que no es poden repetir els noms
            'hidden'=> $this->faker->date(),            
            // date() o name() son el tipus de dades
        ];
    }
}
