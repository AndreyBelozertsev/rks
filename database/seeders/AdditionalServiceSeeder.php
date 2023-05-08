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
            [
                'title' => 'Яндекс.Карты в поиске (колдунчик)',
                'description' =>  '<p>Так называемый колдунчик, который отображается при вводе в строку поиска названия организации или вида деятельности, например «Салон красоты Симферополь»</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/yandex-karty-koldunchik.png',
                'sort' => 100,
            ],
            [
                'title' => 'Яндекс.Карты десктоп',
                'description' =>  '<p>При поиске организации, что бы детальнее посмотреть местоположение организации с компьютера, вам откроется именно эта страница.</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/yandex-karty-desktop.png',
                'sort' => 200,
            ],
            [
                'title' => 'Яндекс.Карты мобильное приложение',
                'description' =>  '<p>Самое актуальное и одно из популярных приложений в России. Яндекс.Карты взаимосвязаны с Яндекс.Навигатор.</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/yandex-karty-mob.png',
                'sort' => 300,
            ],
            [
                'title' => 'Компания с адресом',
                'description' =>  '<p>Реклама появится на площадках Яндекса, самостоятельно найдет потенциальных клиентов и приведет их в ваш профиль, а сам профиль компании станет заметнее.</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/kompaniya_s_adresom.png',
                'sort' => 100,
            ],
            [
                'title' => 'Сайт или соцсеть',
                'description' =>  '<p>Можно запустить рекламу на сайт, соц.сеть, товары или посты группы, канала. Вам будут предложены автоматические объявления, но вы можете создать и свои.</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/sayt_ili_socset.png',
                'sort' => 200,
            ],
            [
                'title' => 'Готовый сайт от Яндекс.Бизнес',
                'description' =>  '<p>Если вы еще не создали свой сайт, то его можно создать через Яндекс.Бизнес, на основе профиля организации. Сайт имеет отдельную ссылку и адаптивен.</p>',
                'thumbnail' => '/template/images/additional-service/2023/03/01/sayt_ya_biz.png',
                'sort' => 200,
            ],
        ];

        foreach($services as $service){
            $serv = AdditionalService::updateOrCreate(
                $service
            );
        }
    }
}
