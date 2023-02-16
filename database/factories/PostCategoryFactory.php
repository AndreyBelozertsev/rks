<?php

namespace Database\Factories;

use Domain\Post\Models\PostCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostCategory>
 */
class PostCategoryFactory extends Factory
{
    
    protected $model = PostCategory::class;

    public function definition()
    {
        return [
            'title' => fake()->word()
        ];
    }
}
