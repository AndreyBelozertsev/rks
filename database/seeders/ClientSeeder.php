<?php

namespace Database\Seeders;

use Domain\Case\Models\Client;
use Illuminate\Database\Seeder;
use Database\Factories\ClientFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Генезис онкология',
                'sort' => 100,
                'thumbnail' => asset('/template/images/clients/genesis.svg'),
            ],
            [
                'title' => 'Kerama marazzi',
                'sort' => 200,
                'thumbnail' => asset('/template/images/clients/kerama-marazzi.svg'),
            ],
            [
                'title' => 'Вино и сыр',
                'sort' => 300,
                'thumbnail' => asset('/template/images/clients/vine-and-chease.svg'),
            ],
            [
                'title' => 'Музей Тавриды',
                'sort' => 400,
                'thumbnail' => asset('/template/images/clients/mus-tavr.svg'),
            ],
            [
                'title' => 'Оникс Крым',
                'sort' => 500,
                'thumbnail' => asset('/template/images/clients/onyx-crimea.svg'),
            ]
        ];

        foreach($items as $item){
            Client::updateOrCreate(
                $item
            );
        }
    }
}