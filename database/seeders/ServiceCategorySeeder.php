<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Маркетинг',
                'description' =>  fake()->paragraph(4),
                'thumbnail' => 'template/images/marketing.png',
                'content' =>  fake()->paragraph(8),
            ],
            [
                'title' => 'Разработка',
                'description' =>  fake()->paragraph(4),
                'thumbnail' => 'template/images/development.png',
                'content' =>  fake()->paragraph(8),
            ],
            [
                'title' => 'Фотосъемка',
                'description' =>  fake()->paragraph(4),
                'thumbnail' => 'template/images/photography.png',
                'content' =>  fake()->paragraph(8),
            ]
        ];
       

        foreach($categories as $category){
            ServiceCategory::updateOrCreate(
                $category
            );
        }
    }
}
