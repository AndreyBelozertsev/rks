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
                'title' => 'Разработка',
                'description' =>  fake()->text(120),
                'content' =>  fake()->text(400),
            ],
            [
                'title' => 'Маркетинг',
                'description' =>  fake()->text(120),
                'content' =>  fake()->text(400),
            ],
            [
                'title' => 'Фотосъемка',
                'description' =>  fake()->text(120),
                'content' =>  fake()->text(400),
            ]
        ];
       

        foreach($categories as $category){
            ServiceCategory::updateOrCreate(
                $category
            );
        }
    }
}
