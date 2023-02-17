<?php

namespace Database\Factories;

use Domain\Product\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;


class ServiceFactory extends Factory
{

    protected $model = Service::class;

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
