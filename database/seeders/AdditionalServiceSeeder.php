<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\AdditionalService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdditionalServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Баннер по маршруту',
                'description' =>  '<p>Появляется, когда скорость авто равна нулю, например, в пробке или во время остановки на светофоре</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/banery-po-marshrutu.png',
                'sort' => 100,
            ],
            [
                'title' => 'Баннер при построении',
                'description' =>  '<p>Баннер показывается в момент построения маршрута</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/banery-pri-postroenii-marshruta.png',
                'sort' => 200,
            ],
            [
                'title' => 'Пины по маршруту',
                'description' =>  '<p>Брендированная метка с подписью, закреплённая за точкой продаж. Отображается при движении по маршруту вблизи организации</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/piny-po-marshrutu.png',
                'sort' => 300,
            ],
            [
                'title' => 'Билборды по маршруту',
                'description' =>  '<p>Единственный цифровой формат, который дублирует наружную рекламу. Показывается при движении по маршруту</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/bilbordy-po-marshrutu.png',
                'sort' => 300,
            ],
        ];

        foreach($services as $service){
            $serv = AdditionalService::updateOrCreate(
                $service
            );
        }
    }
}
