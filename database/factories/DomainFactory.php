<?php

namespace Database\Factories;

use App\Models\Domain;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domain>
 */
class DomainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Domain::class;
    public function definition(): array
    {
        
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'sub_skills' => json_encode([
                $this->faker->word,
                $this->faker->word,
                $this->faker->word,
            ]),
        ];
    }
}
