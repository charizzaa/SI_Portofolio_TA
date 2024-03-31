<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tags>
 */
class tagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_content' => $this->faker->randomElement([124, 125, 126, 127, 128, 133, 134, 135, 136, 137, 139, 140, 141]),
            'tag' => $this->faker->randomElement(['Software Engineering', 'Intelligent Gaming', 'Data Science', 'System Security and Cybersecurity', 'Mobile and Responsive App Development', 'Blockchain Technology and Digital Finance', 'Artificial Intelligence and Natural Language Processing', 'IoT'])
        ];
    }
}
