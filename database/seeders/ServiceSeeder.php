<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\Service;
use Database\Factories\ServiceFactory;
use Domain\Product\Models\ServiceCategory;
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
                'thumbnail' => '/template/images/service/sayt-vizitka.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 100,
            ],
            [
                'title' => 'Каталог',
                'description' => '<p>Сайт содержит в себе каталог товаров и услуг с отдельными страницами и фильтрами</p>',
                'thumbnail' => '/template/images/service/katalog.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 200,
            ],
            [
                'title' => 'Интернет-магазин',
                'description' =>  '<p>Имеет интеграцию с программами учёта, позволяет создать онлайн заказ, оплатить его и выбрать способ доставки</p>',
                'thumbnail' => '/template/images/service/internet-magazin.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 300,
            ],
            [
                'title' => 'Другие',
                'description' =>  '<p>В зависимости от задач это может быть агрегатор, или новостной портал, промо-сайт, корпоративный портал и прочее</p>',
                'thumbnail' => '/template/images/service/drugoe.jpg',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
                'service_category_id' => 2,
                'sort' => 400,
            ]
            
        ];
       
        foreach($services as $service){
            Service::updateOrCreate(
                $service
            );
        }
    }
}

// $table->string('title');
// $table->string('slug')->unique();
// $table->string('thumbnail')->nullable();
// $table->text('description')->nullable();
// $table->text('content')->nullable();
// $table->text('images')->nullable();
// $table->integer('sort')->default(500)->nullable();
// $table->boolean('status')->default(true);
// $table->foreignIdFor(ServiceCategory::class)
//         ->nullable()
//         ->constrained()
//         ->onUpdate('cascade')
//         ->nullOnDelete('cascade');