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
                'content' =>  '<p>Преимущества сайта-визитки:</p>
                    <ol>
                        <li>Доступность: легко организовать и&nbsp;обслуживать, не&nbsp;требует больших знаний или&nbsp;специальных навыков</li>
                        <li>Эффективность: позволяет представить ваш&nbsp;бизнес в&nbsp;сети, увеличивая доступность для&nbsp;потенциальных клиентов</li>
                        <li>Экономия денег: сравнительно недорогое решение, не&nbsp;требует больших инвестиций по&nbsp;сравнению с&nbsp;разработкой полноценного сайта</li>
                    </ol>
                    <p>Недостатки сайта-визитки:</p>
                    <ol>
                        <li>Ограниченные функциональные возможности: может собирать заявки, но&nbsp;не&nbsp;содержит страниц товаров или&nbsp;услуг</li>
                        <li>Для&nbsp;представленности в&nbsp;сети вместо сайта-визитки можно использовать профиль на&nbsp;Яндекс.Картах</li>
                        <li>Сложно продвигать</li>
                    </ol>',
                'price' => 'от 20 000 руб.',
                'service_category_id' => 2,
                'sort' => 100,
                'images' => '[{"url":"template\/images\/service\/2023\/03\/01\/geo.png","title":"","desc":"","orig":"geo.png","filesize":47935,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Каталог',
                'description' => '<p>Сайт содержит в себе каталог товаров и услуг с отдельными страницами и фильтрами</p>',
                'thumbnail' => '/template/images/service/2023/03/01/katalog.jpg',
                'content' =>  '<p>Сайт-каталог имеет несколько преимуществ, вот некоторые из них:</p>
                    <ol>
                        <li>Удобство использования: сайт-каталог предоставляет удобный и простой способ поиска нужной информации о товарах или услугах. Посетители могут легко и быстро находить нужную информацию, пользоваться поиском по сайту</li>
                        <li>Широкий выбор: кроме информации о компании также содержит перечень товаров и услуг, каждая из которых может иметь отдельную страницу, на сайте может быть новостной раздел и другая дополнительная информация.</li>
                        <li>Продвижение: данная категория сайтов имеет больший набор инструментов для продвижения чем сайт визитка. </li>
                        <li>Сбор аналитики: благодаря инструментам электронной коммерции позволяет собирать более точную аналитику для составления более полного портрета целевой аудитории</li>
                        <li>Система сбора обратной связи: позволяет собирать лиды сразу на несколько товаров или услуг</li>
                    </ol>
                    <p>Недостатки сайта-каталога:</p>
                    <ol>
                        <li>Не удобство для клиента: у данной категории сайтов отсутствует возможность добавлять товары в корзину или избранное, что в свою очередь снижает конверсию</li>
                        <li>Нет возможности осуществить сделку онлайн: после заполнения контактной формы Клиенту необходимо ждать пока менеджер с ним свяжется для уточнения конфигурации товара или услуги, оговорить условия доставки и оплаты</li>
                        <li>Сложнее оценить эффективность онлайн рекламы: в данной категории сайтов все заявки напрямую закрываются менеджером, необходимо использовать большее количество дополнительных инструментов (CRM, колл-трекинг и офлайн е-комерс системы), что влечет дополнительные затраты на внедрение, при этом всегда присутствует человеческий фактор, который может повлиять на итоговый результат</li>
                    </ol>',
                'price' => 'от 50 000 руб.',
                'service_category_id' => 2,
                'sort' => 200,
            ],
            [
                'title' => 'Интернет-магазин',
                'description' =>  '<p>Имеет интеграцию с программами учёта, позволяет создать онлайн заказ, оплатить его и выбрать способ доставки</p>',
                'thumbnail' => '/template/images/service/2023/03/01/internet-magazin.jpg',
                'content' =>  '<p>Интернет-магазин имеет несколько преимуществ, вот некоторые из них:</p>
                    <ol>
                        <li>Доступность: интернет-магазин доступен в режиме 24/7, что позволяет Клиенту делать заказ в удобное для него время и место.</li>
                        <li>Большой выбор: интернет-магазин может предложить большой ассортимент товаров, которые не всегда доступны в обычном магазине</li>
                        <li>Удобный поиск: в интернет-магазине можно легко найти нужный товар с помощью поиска или фильтров по категориям, цене и другим параметрам</li>
                        <li>Удобный заказ: оформление заказа в интернет-магазине занимает несколько минут, а оплата может быть произведена удобным для покупателя способом</li>
                    </ol>
                    <p>Недостатки интернет-магазины:</p>
                    <ol>
                        <li>Высокая стоимость разработки: зачастую для удобства работы требуются интеграции со сторонними сервисами такими как 1с, Битрикс24, R-keeper, системы онлайн оплаты, системы доставки и многое другое. Все это способно существенно увеличивать стоимость разработки</li>
                    </ol>',
                'price' => 'от 80 000 руб.',
                'service_category_id' => 2,
                'sort' => 300,
            ],
            [
                'title' => 'Другие',
                'description' =>  '<p>В зависимости от задач это может быть агрегатор, или новостной портал, промо-сайт, корпоративный портал и прочее</p>',
                'thumbnail' => '/template/images/service/2023/03/01/drugoe.jpg',
                'content' =>  '<p>Каждый бизнес индивидуален, и для оптимизации бизнес процессов может  требоваться индивидуальное программное обеспечение. К данной категории относятся CRM системы, коропоративные порталы, мобильные приложения, системы бронирования и многое другое. Данное ПО разрабатывается под конкретные требования Клиента по индивидуальному проекту</p>',
                'price' => 'индивидуально',
                'service_category_id' => 2,
                'sort' => 400,
            ],
            [
                'title' => 'Яндекс.Карты',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'thumbnail' => '/template/images/service/2023/03/01/ya-map.jpeg',
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
                'images' => '[{"url":"template\/images\/service\/2023\/03\/01\/geo.png","title":"","desc":"","orig":"geo.png","filesize":47935,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
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
                'images' => '[{"url":"template\/images\/service\/2023\/03\/01\/geo.png","title":"","desc":"","orig":"geo.png","filesize":47935,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Интерьерная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 100,
            ],
            [
                'title' => 'Предметная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 200,
            ],
            [
                'title' => 'Контентная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 300,
            ],
            [
                'title' => 'Портретная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 400,
            ],
            [
                'title' => 'Панорамная фотосьемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 3,
                'sort' => 500,
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