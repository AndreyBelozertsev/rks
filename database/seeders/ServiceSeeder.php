<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ServiceFactory;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceFactory::new()
            ->count(50)
            ->create(['service_category_id'=>ServiceCategory::inRandomOrder()->first()]);
    }
}
