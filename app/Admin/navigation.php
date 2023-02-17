<?php

use SleepingOwl\Admin\Navigation\Page;


return [
    [
        'title' => 'Статьи',
        'icon' => 'fa fa-newspaper',
        'priority'    => 100,
        'pages' => [
            (new Page(\Domain\Post\Models\Post::class))
                ->setPriority(0),
            (new Page(\Domain\Post\Models\PostCategory::class))
                ->setPriority(100)
        ]
    ],
    [
        'title' => 'Продукт',
        'icon' => 'fa fa-folder',
        'priority'    => 200,
        'pages' => [
            (new Page(\Domain\Product\Models\Service::class))
                ->setPriority(0),
            (new Page(\Domain\Product\Models\ServiceCategory::class))
                ->setPriority(100),
            (new Page(\Domain\Product\Models\DevelopmentStage::class))
                ->setPriority(200),
        ]
    ],
    [
        'title' => 'Кейсы',
        'icon' => 'fa fa-briefcase',
        'priority'    => 300,
        'pages' => [
            (new Page(\Domain\Case\Models\Portfolio::class))
                ->setPriority(0),
            (new Page(\Domain\Case\Models\PortfolioCategory::class))
                ->setPriority(100),
        ]
    ],
    [
        'title' => 'Настройки',
        'icon' => 'fa fa-cogs',
        'priority'    => 700,
        'pages' => [
            (new Page(Domain\Setting\Models\Setting::class))
                ->setPriority(0),
            (new Page(\Domain\Setting\Models\Navigation::class))
                ->setPriority(100),
            (new Page(Domain\Auth\Models\User::class))
                ->setPriority(100)   
        ]
    ],
];
