<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Case\Models\PortfolioCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Медицина'
            ],
            [
                'title' => 'Красота'
            ],
            [
                'title' => 'Общественное питание'
            ],
            [
                'title' => 'Отели/Гостевые дома'
            ],
            [
                'title' => 'Спорт'
            ],
        ];
       

        foreach($categories as $category){
            PortfolioCategory::updateOrCreate(
                $category
            );
        }
    }
}
