<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Domain\Post\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Разработка'
            ],
            [
                'title' => 'Маркетинг'
            ],
            [
                'title' => 'Фотосъемка'
            ]
        ];
       

        foreach($categories as $category){
            PostCategory::updateOrCreate(
                $category
            );
        }
    }
}
