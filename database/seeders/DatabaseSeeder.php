<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
            DevelopmentStageSeeder::class,
            NavigationSeeder::class,
            PortfolioCategorySeeder::class,
            PortfolioSeeder::class,
            PostCategorySeeder::class,
            PostSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
