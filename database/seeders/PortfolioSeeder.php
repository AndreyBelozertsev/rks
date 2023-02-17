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
            ->count(50)
            ->create(['portfolio_category_id'=>PortfolioCategory::inRandomOrder()->first()]);
    }
}
