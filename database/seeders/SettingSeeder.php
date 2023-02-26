<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Setting\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'key' => 'organization',
                'value' => 'ООО "Ракурс"',
            ],
            [
                'key' => 'phone1',
                'value' => '+7 (978) 110 72 83',
            ],
            [
                'key' => 'phone2',
                'value' => '+7 (978) 110 72 89',
            ],
            [
                'key' => 'email',
                'value' => 'info.rakurs@bk.ru',
            ],
            [
                'key' => 'city',
                'value' => 'г. Симферополь',
            ],
            [
                'key' => 'street',
                'value' => 'ул. Маяковского',
            ],
            [
                'key' => 'building',
                'value' => '14л',
            ],
            [
                'key' => 'office',
                'value' => 'офис 311',
            ],
            [
                'key' => 'coordinates',
                'value' => '44.949341, 34.088397',
            ],
            [
                'key' => 'work_days',
                'value' => 'понедельник - пятница',
            ],
            [
                'key' => 'work_time',
                'value' => 'с 10 до 19',
            ],
            [
                'key' => 'vk',
                'value' => 'https://vk.com/rakurs3d',
            ],
            [
                'key' => 'policy',
                'value' => 'Политика обработки персональных данных',
            ],
            [
                'key' => 'cookie',
                'value' => 'Мы используем cookies на нашем сайте для лучшего пользовательского опыта. Продолжая использовать сайт, вы даёте согласие на работу с этими файлами',
            ],

        ];
       

        foreach($items as $item){
            Setting::updateOrCreate(
                $item
            );
        }
    }
}
