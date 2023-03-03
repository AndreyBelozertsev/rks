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
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/marketing.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
            ],
            [
                'title' => 'Разработка',
                'description' => '<p>Мы часто сталкивались с тем, что заказчики, которые хотят заказать свой первый сайт, точно не знают, как правильно выбрать исполнителя, из чего складывается стоимость сайта и какие есть особенности. С чего же складывается цена?</p>',
                'icon' => '<lord-icon src="/template/lord-icon/development.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<p>' .fake()->paragraph(8) . '</p>',
            ],
            [
                'title' => 'Фотосъемка',
                'description' =>  '<p>' .fake()->paragraph(4) . '</p>',
                'icon' => '<lord-icon src="/template/lord-icon/photography.json" trigger="loop" delay="1500" colors="primary:#F0F0F0,secondary:#cbe857" stroke="35" style="width:100px;height:100px"></lord-icon>',
                'content' =>  '<h2>Виды фотосъёмки</h2><p>&nbsp;</p><p>К основным видам фотосъёмки относятся: предметная, интерьерная и панорамная съёмка.</p>
                                <p>Предметная фотография относится к&nbsp;съёмке конкретных объектов, людей, животных или&nbsp;пейзажей, где&nbsp;основной упор делается на&nbsp;сам&nbsp;объект. Такой тип&nbsp;фотографии требует от&nbsp;фотографа хорошего понимания композиции, освещения и&nbsp;других технических аспектов, чтобы&nbsp;создать красивое и&nbsp;выразительное изображение</p>
                                <p>Панорамная фотография &mdash; съёмка пейзажей и обширных пространств, таких как городские панорамы, ландшафты. Используется для создания 3d-туров. Она требует от фотографа знания оптических характеристик камеры и умения управлять перспективой и глубиной резкости</p>
                                <p>Интерьерная фотосъёмка&nbsp;&mdash; это&nbsp;вид&nbsp;фотографии, который заключается в&nbsp;создании визуальных изображений интерьера помещения. Она&nbsp;используется для&nbsp;представления дизайна и&nbsp;декора в&nbsp;журналах о&nbsp;доме, каталогах мебели или&nbsp;недвижимости, а&nbsp;также для&nbsp;продвижения в&nbsp;интернете. Успешный результат зависит от&nbsp;качества освещения, композиции, выбора углов и&nbsp;перспективы, а&nbsp;также от&nbsp;технических навыков фотографа. Интерьерная фотосъёмка может улучшить внешний вид&nbsp;помещения и&nbsp;привлечь внимание потенциальных клиентов</p>
                                <p>&nbsp;</p>
                                <h2>Для чего?</h2>
                                <p>Визуальный контент, такой как&nbsp;фото, иллюстрации и&nbsp;видео, является неотъемлемой частью успешного сайта. Он&nbsp;помогает повысить заинтересованность и&nbsp;запоминаемость посетителей, а&nbsp;также улучшает впечатление о&nbsp;вашем бренде или&nbsp;продукте</p>
                                <p>Также&nbsp;визуальный контент помогает более эффективно выражать идею или&nbsp;сообщение, чем&nbsp;текст или&nbsp;аудио на&nbsp;одном и&nbsp;том&nbsp;же&nbsp;уровне. Исследования показывают, что&nbsp;люди в&nbsp;60 000&nbsp;раз&nbsp;быстрее понимают визуальную информацию, чем&nbsp;текстовую</p>
                                <p>Зрение является нашим основным источником внешней информации, и&nbsp;более 80% всей информации, обрабатываемой нашим мозгом, поступает именно через&nbsp;зрение. Чтобы&nbsp;максимально использовать потенциал визуального контента, следует выбирать качественные изображения, которые соответствуют теме и&nbsp;цели вашего сайта, и&nbsp;использовать их&nbsp;в&nbsp;подходящем контексте</p>
                                <p>&nbsp;</p>
                                <h2>Съёмка на&nbsp;телефон и&nbsp;фотоаппарат &mdash; отличия</h2>
                                <p>Фотосъёмка на&nbsp;фотоаппарате и&nbsp;телефоне имеют ряд&nbsp;существенных различий. Телефоны имеют удобный и&nbsp;компактный дизайн, что&nbsp;делает их&nbsp;идеальными для&nbsp;снимков в&nbsp;дороге или&nbsp;в&nbsp;любых удобных условиях. Они&nbsp;также&nbsp;имеют встроенные приложения для&nbsp;обработки изображений и&nbsp;доступ к&nbsp;Интернету, что&nbsp;делает их&nbsp;удобными для&nbsp;мгновенной публикации изображений в&nbsp;социальных сетях</p>
                                <p>С&nbsp;другой стороны, фотоаппараты обычно имеют более мощные оптику и&nbsp;матрицы, что&nbsp;позволяет захватывать более детальные и&nbsp;яркие изображения в&nbsp;условиях низкой освещённости. Также&nbsp;фотоаппараты имеют широкий диапазон настроек, таких как&nbsp;ISO, выдержка и&nbsp;диафрагма, что&nbsp;даёт фотографу больше контроля над&nbsp;изображением</p>
                                <p>&nbsp;</p>',
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
