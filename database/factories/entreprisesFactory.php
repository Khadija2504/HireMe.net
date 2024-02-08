<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Entreprises;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprises>
 */
class EntrepriseFactory extends Factory
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
            'adresse' => fake()->text(),
            'email' => fake()->unique()->safeEmail(),
            'description' => fake()->paragraph(),
            'slogan' => fake()->jobTitle(),
            'industrie' => fake()->jobTitle(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
