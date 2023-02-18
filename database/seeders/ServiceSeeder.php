<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ServiceFactory;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;

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
            ->count(30)
            ->state(new Sequence(
                fn ($sequence) => ['service_category_id' => ServiceCategory::all()->random()],
            ))
            ->create();
    }
}
