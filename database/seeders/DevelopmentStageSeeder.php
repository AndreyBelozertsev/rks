<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\DevelopmentStageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DevelopmentStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DevelopmentStageFactory::new()
            ->count(10)
            ->create();
    }
}
