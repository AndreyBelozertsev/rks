<?php

namespace Database\Factories;

use Domain\Seo\Models\Seo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SeoFactory extends Factory
{

    protected $model = Seo::class;
    
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'url' => fake()->slug(),
            'description' => fake()->text(120),
            'created_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }
}
