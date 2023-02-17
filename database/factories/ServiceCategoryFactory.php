<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceCategory>
 */
class ServiceCategoryFactory extends Factory
{
    protected $model = ServiceCategory::class;

    public function definition()
    {
        return [
            'title' => fake()->word(),
            'description' =>  fake()->text(120),
            'content' =>  fake()->text(400),

        ];
    }
}