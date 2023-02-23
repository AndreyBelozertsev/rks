<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Domain\Customer\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name' => fake()->firstName(),
            'phone'=> Str::phoneNumber(fake()->e164PhoneNumber()),
            'email'=> fake()->email(),
            'services'=> 'marketing',
            'url' => fake()->slug(),
            'comment'=> fake()->paragraph(1),
        ];
    }
}