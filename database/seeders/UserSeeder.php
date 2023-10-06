<?php

namespace Database\Seeders;

use Domain\Auth\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Андрей',
            'email' => 'andrey_belozertsev@mail.ru',
            'password' => Hash::make('Aa12345678')
        ]);

        User::create([
            'name'=>'Иван',
            'email' => 'gartpaint@yandex.ru',
            'password' => Hash::make('Kdkti2345f!')
        ]);


        User::create([
            'name'=>'Алина',
            'email' => 'dodika.alina@yandex.ru',
            'password' => Hash::make('Lckcdkd93lxx2rv')
        ]);
    }
}
