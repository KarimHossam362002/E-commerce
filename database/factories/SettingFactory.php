<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' =>fake()->text(100),
            'address' =>fake()->address(),
            'phone' =>fake()->phoneNumber(),
            'email' =>fake()->email(),
            'logo' =>fake()->imageUrl(),
            'facebook' =>fake()->url(),
            'twitter' =>fake()->url(),
            'instagram' =>fake()->url(),
            'youtube' =>fake()->url(),
        ];
    }
}
