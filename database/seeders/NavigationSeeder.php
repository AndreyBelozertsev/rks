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
                'status' => 1
            ],
            [
                'title' => 'Услуги',
                'url' => '/service-category',
                'type' => 'top',
                'status' => 1
            ],
            [
                'title' => 'Контакты',
                'url' => '/contact',
                'type' => 'top',
                'status' => 1
            ]
        ];
        

        foreach($items as $item){
            Navigation::updateOrCreate(
                $item
            );
        }
    }
}
