<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\PostFactory;
use Domain\Post\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostFactory::new()
            ->count(30)
            ->create(['post_category_id'=>PostCategory::inRandomOrder()->first()]);
    }
}
