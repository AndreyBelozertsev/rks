<?php

namespace Database\Factories;

use Domain\Vacancy\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Model>
 */
class VacancyFactory extends Factory
{

    protected $model = Vacancy::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraph(),
            'created_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
