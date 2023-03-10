<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\DevelopmentStage;
use Database\Factories\DevelopmentStageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DevelopmentStageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Аналитика',
                'description' => '<p>Чтобы определиться, какой вам нужен сайт, необходимо проанализировать вашу аудиторию</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/analitika.jpg',
                'sort' => 100,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Стратегия',
                'description' => '<p>Теперь важно определить цель сайта, критерии успеха</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/strategy.jpg',
                'sort' => 200,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Техзадание',
                'description' => '<p>Теперь важно определить цель сайта, критерии успеха</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/texzadanie.jpg',
                'sort' => 300,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Прототипирование',
                'description' => '<p>Создание сценариев пути пользователя и проектирование структуры страниц на сайте</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/prototipirovanie.jpg',
                'sort' => 400,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Дизайн-макет',
                'description' => '<p>Дизайн сайта и демонстрация его прототипа до этапа разработки</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/dizain-maket.jpg',
                'sort' => 500,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Верстка',
                'description' => '<p>Дизайн-макет превращается в код HTML. Уровень навыков исполнителя, сложность реализации элементов влияют на стоимость</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/verstka.jpg',
                'sort' => 600,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Программирование',
                'description' => '<p>Интеграция вёрстки с CMS, настройка системы кеширования, оптимизация запросов</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/programmirovanie.jpg',
                'sort' => 700,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Базовое наполнение',
                'description' => '<p>Подготовка и обработка предоставленных материалов для размещения на сайте, настройка</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/bazovoe-napolnenie.jpg',
                'sort' => 800,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Тестирование',
                'description' => '<p>Состоит из двух этапов. Закрытое — взаимодействие сайта с бизнесом. Открытое — тестирование работы сайта и поведения пользователей</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/testirovanie.jpg',
                'sort' => 900,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
            [
                'title' => 'Техподдержка',
                'description' => '<p>Поддержка сайта в работоспособном состоянии и помощь в устранении неполадок</p>',
                'content' => '<p>Перед созданием сайта крайне важно провести аналитику. Этот процесс помогает определить потребности и желания вашей целевой аудитории, а также технические и дизайнерские требования к проекту</p>',
                'thumbnail' => '/template/images/stages/2023/03/01/texpodderjka.jpg',
                'sort' => 1000,
                'images' => '[{"url":"template\/images\/stages\/2023\/03\/01\/service-3.jpg","title":"","desc":"","orig":"service-3.jpg","filesize":151521,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-2.jpg","filesize":253909,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},{"url":"template\/images\/stages\/2023\/03\/01\/service-1.jpg","title":"","desc":"","orig":"service-1.jpg","filesize":254118,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}]'
            ],
           
        ];
        

        foreach($items as $item){
            DevelopmentStage::updateOrCreate(
                $item
            );
        }
    }
}