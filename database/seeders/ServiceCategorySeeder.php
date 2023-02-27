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
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'thumbnail' => '/template/images/service-category/marketing.png',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
            ],
            [
                'title' => 'Разработка',
                'description' => '<p>Мы часто сталкивались с тем, что заказчики, которые хотят заказать свой первый сайт, точно не знают, как правильно выбрать исполнителя, из чего складывается стоимость сайта и какие есть особенности. С чего же складывается цена?</p>',
                'thumbnail' => '/template/images/service-category/development.png',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
            ],
            [
                'title' => 'Фотосъемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'thumbnail' => '/template/images/service-category/photography.png',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
            ]
        ];
       

        foreach($categories as $category){
            ServiceCategory::updateOrCreate(
                $category
            );
        }
    }
}
