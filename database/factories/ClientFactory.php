<?php

namespace Database\Factories;

use Domain\Case\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClientFactory extends Factory
{

    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'title' => fake()->word(),
        ];
    }
}