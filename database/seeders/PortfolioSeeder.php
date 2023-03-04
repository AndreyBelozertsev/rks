<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\PortfolioFactory;
use Domain\Case\Models\PortfolioCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioFactory::new()
            ->count(20)
            ->create([
                'portfolio_category_id'=>PortfolioCategory::inRandomOrder()->first(),
                'thumbnail' => '/template/images/case/2023/03/01/1.jpg',
                'images' => '[
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-1.jpg","title":"","desc":"","orig":"photography-1.jpg","filesize":267581,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-2.jpg","title":"","desc":"","orig":"photography-2.jpg","filesize":282339,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-3.jpg","title":"","desc":"","orig":"photography-3.jpg","filesize":259121,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-1.jpg","title":"","desc":"","orig":"photography-1.jpg","filesize":267581,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-2.jpg","title":"","desc":"","orig":"photography-2.jpg","filesize":282339,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/case\/2023\/03\/01\/photography-3.jpg","title":"","desc":"","orig":"photography-3.jpg","filesize":259121,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}
                ]',
            ]);
    }
}
