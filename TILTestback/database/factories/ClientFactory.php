<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'nom' => fake()->name(),
            'ville' => fake()->state(),
            'telephone' =>  $this -> faker ->phoneNumber(),
            'numero'=>  rand(1,100),
            'createdAt'=>fake()->date()
        ];
    }
}
