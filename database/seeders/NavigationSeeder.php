<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Domain\Setting\Models\Navigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Главная',
                'url' => '/',
                'type' => 'top',
                'status' => 1,
                'sort' => 100
            ],
            [
                'title' => 'Услуги',
                'url' => '/service-category',
                'type' => 'top',
                'status' => 1,
                'sort' => 200
            ],
            [
                'title' => 'Кейсы',
                'url' => '/case',
                'type' => 'top',
                'status' => 1,
                'sort' => 300
            ],
            [
                'title' => 'Отзывы',
                'url' => '/feedback',
                'type' => 'top',
                'status' => 1,
                'sort' => 400
            ],
            [
                'title' => 'Блог',
                'url' => '/post',
                'type' => 'top',
                'status' => 1,
                'sort' => 500
            ],
            [
                'title' => 'Контакты',
                'url' => '/contact',
                'type' => 'top',
                'status' => 1,
                'sort' => 600
            ]
        ];
        

        foreach($items as $item){
            Navigation::updateOrCreate(
                $item
            );
        }
    }
}
