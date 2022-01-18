<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomaffichage' => $this->faker->sentence,
            'addressemail' => $this->faker->unique()->paragraph,
            'created_at' => now()
        ];
    }
}
