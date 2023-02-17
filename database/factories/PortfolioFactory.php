<?php

namespace Database\Factories;

use Domain\Case\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;


class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;
    
    public function definition()
    {
        return [
            'title' => fake()->word(),
            //'thumbnail' => $this->faker->fixturesImage('post','post/' . date('Y/m/d') ),
            //'images' => $this->imagesGeneration('about','about/'),
            'description' => fake()->paragraph(),
            'service_description' => fake()->paragraph(),
            'result' => fake()->paragraph(),
            'techology' => fake()->paragraph(),
            'branch' => fake()->word(),
            'content' => fake()->paragraph(),
            'created_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}