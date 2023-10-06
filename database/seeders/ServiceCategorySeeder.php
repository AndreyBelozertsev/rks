<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Маркетинг',
                'description' =>  '<p>Термины и аббревиатуры: SEO, SMM, CR, CPA, контекст – это&nbspто, с&nbspчем сталкивается заказчик при&nbspпопытке разобраться, что&nbspтакое интернет-маркетинг, как&nbspоценить его&nbspэффективность и&nbspкакие инструменты действительно сработают. Рассказываем подробнее обо&nbspвсех нюансах. </p>',
                'icon' => '<lord-icon src="/template/lord-icon/marketing.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>Это комплекс процессов, направленных на продвижение товаров и популяризацию организации, заведения, услуг в Интернете с помощью инструментов интернет-маркетинга. Задача маркетинга правильно определить целевую аудиторию, привлечь ее внимание и превратить в потенциальных покупателей.</p>
                    <p>Ниже рассказываем про основные инструменты интернет-маркетинга.</p>',
            ],
            [
                'title' => 'Разработка',
                'description' => '<p>Создавая свой первый сайт, заказчику нужно правильно выбрать исполнителя, понять, из&nbspчего складывается стоимость разработки, какие есть особенности и&nbspтонкости. Собрали для&nbspвас подробную информацию об&nbspэтапах создания и&nbspвидах сайтов.</p>',
                'icon' => '<lord-icon src="/template/lord-icon/development.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>Перед началом разработки сайта важно пройти несколько подготовительных этапов.</p>
                    <p>Как проходит процесс обсуждения в команде студии «Ракурс»:</p>
                    <ul>
                        <li>проводится интервью с заказчиком;</li>
                        <li>формируются задачи, которые должен решать сайт;</li>
                        <li>определяется целевая аудитория;</li>
                        <li>осуществляется разбор конкурентов, выявляются сильные и слабые стороны;</li>
                        <li>обсуждаются и вырабатываются конкурентные преимущества.</li>
                    </ul>
                    Эти данные помогают сформировать уникальное торговое предложение, выстроить путь клиента и эффективную воронку продаж. Важно, чтобы сайт был прост и понятен для клиента, был стильным и адаптивным под разные устройства. 
                    </p>',
            ],
            [
                'title' => 'Фотосъемка',
                'description' => 'Ремонт по индивидуальному дизайну, фирменная подача блюда или самое современное оборудование. Эти аргументы смогу заставить Клиента обратиться именно к Вам. Качественные фото – лучший способ показать наглядно Ваши сильные стороны. Как правильно подойти к процессу съемки или определиться с фотографом? Давайте подробнее с этим разберемся',
                'icon' => '<lord-icon src="/template/lord-icon/photography.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<h3>Мы осуществляем следующие виды фотосьемки</h3>
                    <ul>
                        <li>Интерьерная</li>
                        <li>Предметная</li>
                        <li>Контентная</li>
                        <li>Портретная</li>
                        <li>Панорамная</li>
                    </ul>',
                'images' => '[
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-1.jpg","title":"","desc":"","orig":"photography-1.jpg","filesize":267581,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-2.jpg","title":"","desc":"","orig":"photography-2.jpg","filesize":282339,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-3.jpg","title":"","desc":"","orig":"photography-3.jpg","filesize":259121,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-1.jpg","title":"","desc":"","orig":"photography-1.jpg","filesize":267581,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-2.jpg","title":"","desc":"","orig":"photography-2.jpg","filesize":282339,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"},
                    {"url":"template\/images\/service-category\/2023\/03\/01\/photography-3.jpg","title":"","desc":"","orig":"photography-3.jpg","filesize":259121,"ext":"jpg","mime":"image\/jpeg","mime_base":"image","mime_detail":"jpeg"}
                ]'
            
            ]
        ];
       

        foreach($categories as $category){
            ServiceCategory::updateOrCreate(
                $category
            );
        }
    }
}
