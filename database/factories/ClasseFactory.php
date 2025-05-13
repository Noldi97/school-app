<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $series = ['A','C', 'D', 'E'];
        $niveaux = ['6ème', '5ème', '4ème', '3ème', '2nde', '1ère', 'Terminale'];

        return [
            'nom_classe' => $this->faker->randomElement($niveaux) . ' ' . $this->faker->randomElement($series),
        ];
    }
}
