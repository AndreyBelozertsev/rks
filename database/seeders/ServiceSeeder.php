<?php

namespace Database\Seeders;

use Domain\Post\Models\Post;
use Illuminate\Database\Seeder;
use Domain\Case\Models\Portfolio;
use Domain\Product\Models\Service;
use Database\Factories\ServiceFactory;
use Domain\Product\Models\ServiceCategory;
use Domain\Product\Models\AdditionalService;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        $services = [
            [
                'title' => 'Сайт-визитка',
                'description' =>  '<p>Основная задача — предоставить дополнительную информацию посетителю об организации</p>',
                'thumbnail' => '/template/images/service/2023/03/01/sayt-vizitka.jpg',
                'content' =>  '<ol>Преимущества сайта-визитки:
                              <li>Доступность: легко организовать и обслуживать, не требует больших знаний или специальных навыков</li>
                              <li>Эффективность: позволяет представить ваш бизнес в сети, увеличивая доступность для потенциальных клиентов</li>
                              <li>Экономия денег: сравнительно недорогое решение, не требует больших инвестиций по сравнению с разработкой полноценного сайта</li>
                              </ol>
                              <ol>Недостатки сайта-визитки:
                              <li>Ограниченные функциональные возможности: может собирать заявки, но не содержит страниц товаров или услуг</li>
                              <li>Для представленности в сети вместо сайта-визитки можно использовать профиль на Яндекс.Картах</li>
                              <li>Сложно продвигать</li>
                              </ol>',
                'service_category_id' => 2,
                'sort' => 100,
                'images' => '[{"url":"template\/images\/services\/2023\/03\/01\/geo.jpg","title":"","desc":"","orig":"geo.jpg","filesize":47935,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Каталог',
                'description' => '<p>Сайт содержит в себе каталог товаров и услуг с отдельными страницами и фильтрами</p>',
                'thumbnail' => '/template/images/service/2023/03/01/katalog.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 200,
            ],
            [
                'title' => 'Интернет-магазин',
                'description' =>  '<p>Имеет интеграцию с программами учёта, позволяет создать онлайн заказ, оплатить его и выбрать способ доставки</p>',
                'thumbnail' => '/template/images/service/2023/03/01/internet-magazin.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 300,
            ],
            [
                'title' => 'Другие',
                'description' =>  '<p>В зависимости от задач это может быть агрегатор, или новостной портал, промо-сайт, корпоративный портал и прочее</p>',
                'thumbnail' => '/template/images/service/2023/03/01/drugoe.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 400,
            ],
            [
                'title' => 'Яндекс.Карты',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/map-pin.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" state="hover-jump" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 1,
                'sort' => 100,
            ],
            [
                'title' => 'QR-код',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/qr.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 1,
                'sort' => 200,
            ],
            [
                'title' => 'Базовое SEO',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/seo.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35"style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 1,
                'sort' => 300,
            ],
            [
                'title' => 'Рекламная подписка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/reklamnaya-podpiska.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 1,
                'sort' => 400,
            ],
            [
                'title' => 'Директ',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/direct.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 1,
                'sort' => 500,
            ],
            [
                'title' => 'Геореклама',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/geo.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" state="hover-1" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>Геореклама в Яндексе используется в трёх сервисах: Яндекс.Карты, Яндекс.Навигатор, Яндекс.Метро. Позволяет вам выделиться на фоне конкурентов и увеличить вовлеченность пользователей в ваш бренд</p>',
                'service_category_id' => 1,
                'view' => 'geo',
                'sort' => 500,
                'images' => '[{"url":"template\/images\/service\/2023\/03\/01\/geo.jpg","title":"","desc":"","orig":"geo.jpg","filesize":47935,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Интерьерная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 100,
            ]   
        ];
       
        foreach($services as $service){
            $serv = Service::updateOrCreate(
                $service
            );
            $serv->portfolios()->sync(Portfolio::inRandomOrder()->limit(4)->pluck('id')->toArray());
            $serv->posts()->sync(Post::inRandomOrder()->limit(3)->pluck('id')->toArray());

            if( $serv->title == 'Геореклама'){
                $serv->additionalServices()->sync(AdditionalService::where('id', '<', 5)->pluck('id')->toArray());
            }
        }
    }
}