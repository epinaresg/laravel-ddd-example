<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'email' => fake()->safeEmail(),

            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'email_verified_at' => now(),
            'password' => '$2y$10$JNIVOCqJujHTA3.KktRNGOmLTdV06O2CiJRNVP4rGbYkrlZ5ketly', // password
        ];
    }

    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
