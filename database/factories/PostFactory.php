<?php

namespace Database\Factories;


use Domain\Post\Models\Post;
use Support\Traits\ImagesGeneration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    use ImagesGeneration;
    
    protected $model = Post::class;
    
    public function definition()
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
// $table->id();
// $table->string('title');
// $table->string('slug')->unique();
// $table->string('thumbnail')->nullable();
// $table->text('images')->nullable();
// $table->text('description')->nullable();
// $table->text('content')->nullable();
// $table->boolean('status')->default(true);
// $table->timestamps();