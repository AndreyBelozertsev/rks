<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerFactory::new()
            ->count(5)
            ->create();
    }
}
