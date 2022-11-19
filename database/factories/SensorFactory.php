<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'suhu' => $this->faker->numberBetween(20, 40),
            'cahaya' => $this->faker->numberBetween(0, 100),
        ];
    }
}
