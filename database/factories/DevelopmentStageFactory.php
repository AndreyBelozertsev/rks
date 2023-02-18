<?php

namespace Database\Factories;

use Domain\Product\Models\DevelopmentStage;
use Database\Factories\DevelopmentStageFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


class DevelopmentStageFactory extends Factory
{

    protected $model = DevelopmentStage::class;

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
