<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\specialities>
 */
class specialitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_dosen' => $this->faker->randomElement([46, 47, 48, 49, 50, 51, 52, 53, 54, 55]),
            'speciality' => $this->faker->randomElement(['Software Engineering', 'Intelligent Gaming', 'Data Science', 'System Security and Cybersecurity', 'Mobile and Responsive App Development', 'Blockchain Technology and Digital Finance', 'Artificial Intelligence and Natural Language Processing', 'IoT'])
        ];
    }
}