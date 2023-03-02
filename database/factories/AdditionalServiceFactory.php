<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AdditionalService>
 */
class AdditionalServiceFactory extends Factory
{

    protected $model = AdditionalService::class;

    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            //'thumbnail' => $this->faker->fixturesImage('post','post/' . date('Y/m/d') ),
            //'images' => $this->imagesGeneration('about','about/'),
            'description' => fake()->paragraph(),
            'content' => fake()->paragraph(),
            'created_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
