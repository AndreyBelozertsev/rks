@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="pt-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container px-0 md:px-4">
            <x-title-with-thumbnail :title="$service->title" :thumbnail="$service->thumbnail" />
        </div>
    </section>
    <section class="pt-10 mb-10">
        <div class="container">
            <h2 class="text-xl md:text-3xl text-center mb-5 md:mb-7">Битрикс24 помогает бизнесу достигать максимальную эффективность</h2>
            <div class="tabs-block">
                <div
                class="gap-2.5 grid grid-cols-[repeat(5,_minmax(260px,_1fr))] overflow-auto pb-2.5 mb-5 xl:flex xl:justify-center xl:mb-7">
                <button class="tab py-4 px-8 active" data-tab="work">Совместная работа</button>
                <button class="tab py-4 px-8 default" data-tab="crm">CRM</button>
                <button class="tab py-4 px-8 default" data-tab="projects">Задачи и Проекты</button>
                <button class="tab py-4 px-8 default" data-tab="stores">Сайты и Магазины</button>
                <button class="tab py-4 px-8 default" data-tab="automation">Автоматизация</button>
                </div>
                <div>
                <div
                    class="tab__item gap-2 flex-col-reverse flex items-start justify-between lg:flex-row 2xl:justify-center md:items-center md:gap-7 work">
                    <ul class="grid grid-cols-1 gap-1 text-lg sm:grid-cols-2 lg:grid-cols-1 w-full lg:w-auto">
                    <li class="relative pl-5 font-bold text-xl">Чаты и Видеозвонки</li>
                    <li class="relative pl-5 font-bold text-xl">Соцсеть компании</li>
                    <li class="relative pl-5 font-bold text-xl">CoРilot</li>
                    <li class="relative pl-5 font-bold text-xl">Календари</li>
                    <li class="relative pl-5 font-bold text-xl">Документы онлайн</li>
                    <li class="relative pl-5 font-bold text-xl">Диск</li>
                    <li class="relative pl-5 font-bold text-xl">Почта</li>
                    <li class="relative pl-5 font-bold text-xl">HR</li>
                    <li><a class="ff-dela-gothic-one text-lg mt-2.5 sm:mt-5 py-4 px-5 lg:px-8 default max-w-fit block"
                        href="https://www.bitrix24.ru/create.php?p=18296013" target="_blank">Получить бесплатно</a></li>
                    </ul>
                    <div class="wrapper-img pb-[53%] max-w-xl w-full lg:pb-[35%] 2xl:pb-[25%]">
                    <img class="wrapper-img__inner" src="/template/images/service/2023/03/01/bitrix.jpg" alt="bitrix24">
                    </div>
                </div>
                <div
                    class="tab__item gap-2 flex-col-reverse hidden items-start justify-between lg:flex-row 2xl:justify-center md:items-center md:gap-7 crm">
                    <ul class="grid grid-cols-1 gap-1 text-lg sm:grid-cols-2 lg:grid-cols-1 w-full lg:w-auto">
                    <li class="relative pl-5 font-bold text-xl">Лиды, Сделки, Контакты, Компании</li>
                    <li class="relative pl-5 font-bold text-xl">Счета, Компреды</li>
                    <li class="relative pl-5 font-bold text-xl">Оплата и доставка</li>
                    <li class="relative pl-5 font-bold text-xl">Автоматизация продаж</li>
                    <li class="relative pl-5 font-bold text-xl">Роботы и триггеры</li>
                    <li class="relative pl-5 font-bold text-xl">Контакт-центр</li>
                    <li class="relative pl-5 font-bold text-xl">Маркетинг</li>
                    <li class="relative pl-5 font-bold text-xl">Сквозная аналитика</li>
                    <li><a class="ff-dela-gothic-one text-lg mt-2.5 sm:mt-5 py-4 px-5 lg:px-8 default max-w-fit block"
                        href="https://www.bitrix24.ru/create.php?p=18296013" target="_blank">Получить бесплатно</a></li>
                    </ul>
                    <div class="wrapper-img pb-[53%] max-w-xl w-full lg:pb-[35%] 2xl:pb-[25%]">
                    <img class="wrapper-img__inner" src="/template/images/service/2023/03/01/bitrix.jpg" alt="bitrix24">
                    </div>
                </div>
                <div
                    class="tab__item gap-2 flex-col-reverse hidden items-start justify-between lg:flex-row 2xl:justify-center md:items-center md:gap-7 projects">
                    <ul class="grid grid-cols-1 gap-1 text-lg sm:grid-cols-2 lg:grid-cols-1 w-full lg:w-auto">
                    <li class="relative pl-5 font-bold text-xl">Задачи</li>
                    <li class="relative pl-5 font-bold text-xl">Проекты</li>
                    <li class="relative pl-5 font-bold text-xl">Диаграмма Ганта</li>
                    <li class="relative pl-5 font-bold text-xl">Канбан</li>
                    <li class="relative pl-5 font-bold text-xl">Учет времени</li>
                    <li class="relative pl-5 font-bold text-xl">Обсуждения в задачах</li>
                    <li class="relative pl-5 font-bold text-xl">Фокусировка внимания</li>
                    <li class="relative pl-5 font-bold text-xl">Интегрировано с CRM</li>
                    <li><a class="ff-dela-gothic-one text-lg mt-2.5 sm:mt-5 py-4 px-5 lg:px-8 default max-w-fit block"
                        href="https://www.bitrix24.ru/create.php?p=18296013" target="_blank">Получить бесплатно</a></li>
                    </ul>
                    <div class="wrapper-img pb-[53%] max-w-xl w-full lg:pb-[35%] 2xl:pb-[25%]">
                    <img class="wrapper-img__inner" src="/template/images/service/2023/03/01/bitrix.jpg" alt="bitrix24">
                    </div>
                </div>
                <div
                    class="tab__item gap-2 flex-col-reverse hidden items-start justify-between lg:flex-row 2xl:justify-center md:items-center md:gap-7 stores">
                    <ul class="grid grid-cols-1 gap-1 text-lg sm:grid-cols-2 lg:grid-cols-1 w-full lg:w-auto">
                    <li class="relative pl-5 font-bold text-xl">Бесплатно и просто</li>
                    <li class="relative pl-5 font-bold text-xl">Конструктор сайтов</li>
                    <li class="relative pl-5 font-bold text-xl">Интернет-магазин</li>
                    <li class="relative pl-5 font-bold text-xl">Формы</li>
                    <li class="relative pl-5 font-bold text-xl">Виджеты</li>
                    <li class="relative pl-5 font-bold text-xl">CRM в подарок</li>
                    <li class="relative pl-5 font-bold text-xl">Интеграция с 1С</li>
                    <li class="relative pl-5 font-bold text-xl">1500+ шаблонов</li>
                    <li><a class="ff-dela-gothic-one text-lg mt-2.5 sm:mt-5 py-4 px-5 lg:px-8 default max-w-fit block"
                        href="https://www.bitrix24.ru/create.php?p=18296013" target="_blank">Получить бесплатно</a></li>
                    </ul>
                    <div class="wrapper-img pb-[53%] max-w-xl w-full lg:pb-[35%] 2xl:pb-[25%]">
                    <img class="wrapper-img__inner" src="/template/images/service/2023/03/01/bitrix.jpg" alt="bitrix24">
                    </div>
                </div>
                <div
                    class="tab__item gap-2 flex-col-reverse hidden items-start justify-between lg:flex-row 2xl:justify-center md:items-center md:gap-7 automation">
                    <ul class="grid grid-cols-1 gap-1 text-lg sm:grid-cols-2 lg:grid-cols-1 w-full lg:w-auto">
                    <li class="relative pl-5 font-bold text-xl">Бизнес-процессы</li>
                    <li class="relative pl-5 font-bold text-xl">Смарт-процессы</li>
                    <li class="relative pl-5 font-bold text-xl">Роботизация бизнеса RPA</li>
                    <li class="relative pl-5 font-bold text-xl">Роботы и триггеры</li>
                    <li class="relative pl-5 font-bold text-xl">Автоматизация продаж и CRM</li>
                    <li class="relative pl-5 font-bold text-xl">Автоматизация задач</li>
                    <li class="relative pl-5 font-bold text-xl">Умные сценарии</li>
                    <li class="relative pl-5 font-bold text-xl">Простые процессы</li>
                    <li><a class="ff-dela-gothic-one text-lg mt-2.5 sm:mt-5 py-4 px-5 lg:px-8 default max-w-fit block"
                        href="https://www.bitrix24.ru/create.php?p=18296013" target="_blank">Получить бесплатно</a></li>
                    </ul>
                    <div class="wrapper-img pb-[53%] max-w-xl w-full lg:pb-[35%] 2xl:pb-[25%]">
                    <img class="wrapper-img__inner" src="/template/images/service/2023/03/01/bitrix.jpg" alt="bitrix24">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-10">
        <div class="container">
            <h2 class="text-xl md:text-3xl text-center">
                Тарифы по внедрению Битрикс24
            </h2>
            <p class="mb-5 text-right md:mb-10">
                Цены указаны за всю компанию,
                а не за отдельных пользователей
            </p>
            <div class="tarifs">
                <div class="switch border border-onAccent rounded-xl grid grid-cols-2 p-1 gap-2.5 w-fit md:mx-auto mb-5 relative">
                <span class="switch__btn rounded-md py-2 px-3 text-accent text-lg text-center font-bold toggle cursor-pointer">на
                    месяц</span>
                <span class="switch__btn rounded-md py-2 px-3 text-accent text-lg text-center font-bold cursor-pointer">на год</span>
                <div class="switch__percent absolute -right-48 p-1 bg-accent text-brand skew-x-[-20deg] text-lg font-bold hidden sm:block">
                    Выгоднее на <span>20</span>%
                </div>
                </div>
                <div class="grid md:grid-cols-[repeat(2,minmax(0,_380px))] justify-center 2xl:grid-cols-4 gap-2.5">
                <div class="tarif-item rounded-xl overflow-hidden flex flex-col justify-between bg-sunnyLime text-brand h-fit">
                    <div class="bg-accent pt-6 px-2 pb-4 text-center mb-4">
                    <h4 class="text-xl">
                        Бесплатный
                    </h4>
                    <p class="text-sm">
                        Начните работать онлайн и продавать<br> больше с CRM
                    </p>
                    </div>
                    <div class="flex justify-between flex-col text-center min-h-[248px]">
                    <h6 class="text-base">
                        <span class="text-sm block">неограниченно</span>
                        пользователей
                    </h6>
                    <p class="text-success text-2xl ff-dela-gothic-one my-auto h-14">Бесплатно</p>
                    <p class="uppercase text-2xl ff-dela-gothic-one">5 гб</p>
                    <button class="show-services rounded-2xl py-2 px-4 text-base active mx-auto my-3">О тарифе</button>
                    </div>
                    <div class="services px-3 hidden justify-between flex-col h-full">
                    <ul class="px-1 py-4 border-t border-brand">
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Совместная работа
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        <ul>
                            <li class="text-base p-1 pl-4">Чат</li>
                            <li class="text-base p-1 pl-4">Видеозвонки HD</li>
                            <li class="text-base p-1 pl-4">Календарь</li>
                            <li class="text-base p-1 pl-4">Соцсеть компании</li>
                            <li class="text-base p-1 pl-4">Новости</li>
                            <li class="text-base p-1 pl-4">База знаний</li>
                        </ul>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Задачи и Проекты
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CRM
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CoPilot
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Онлайн-подпись
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Диск
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Контакт-центр
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Сайты
                            <div class="border border-brand rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-brand"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                    <a href="{{ route('form.show', ['category' => $service->category->slug]) }}"
                        class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl mb-3 mt-auto">Оставить
                        заявку</a>
                    </div>
                </div>
                <div class="tarif-item rounded-xl overflow-hidden flex flex-col justify-between bg-brand border border-accent h-fit">
                    <div class="bg-accent text-brand pt-6 px-2 pb-4 text-center mb-4">
                    <h4 class="text-xl">
                        Базовый
                    </h4>
                    <p class="text-sm">
                        Для эффективной работы небольших компаний и отделов продаж
                    </p>
                    </div>
                    <div class="flex justify-between flex-col text-center min-h-[248px]">
                    <h6 class="text-base mb-5">
                        <span class="text-2xl block">5</span>
                        пользователей
                    </h6>

                    <div class="price-block show h-14">
                        <span class="old-price line-through"></span>
                        <div class="flex justify-center gap-2">
                        <p class="text-brandHeading text-lg ff-dela-gothic-one py-0">
                            <span class="price">2 490</span> р/мес.
                        </p>
                        <span class="discount p-1 bg-accent text-brand skew-x-[-25deg] hidden">-20%</span>
                        </div>
                    </div>

                    <p class="uppercase text-2xl ff-dela-gothic-one mt-auto">24 гб</p>
                    <button class="show-services rounded-2xl py-2 px-4 text-base active mx-auto my-3">О тарифе</button>
                    </div>
                    <div class="services px-3 hidden justify-between h-full flex-col">
                    <ul class="px-1 py-4 border-t border-accent">
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                        Совместная работа
                        <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        <ul>
                            <li class="text-base p-1 pl-4">Чат</li>
                            <li class="text-base p-1 pl-4">Видеозвонки HD</li>
                            <li class="text-base p-1 pl-4">Календарь</li>
                            <li class="text-base p-1 pl-4">Соцсеть компании</li>
                            <li class="text-base p-1 pl-4">Новости</li>
                            <li class="text-base p-1 pl-4">База знаний</li>
                        </ul>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Задачи и Проекты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CRM
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CoPilot
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Онлайн-подпись
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Диск
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Контакт-центр
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Сайты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Интернет-магазин
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Поддержка
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                    </ul>
                    <a href="{{ route('form.show', ['category' => $service->category->slug]) }}"
                        class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl mb-3 mt-auto">Оставить
                        заявку</a>
                    </div>
                </div>
                <div class="tarif-item rounded-xl overflow-hidden flex flex-col justify-between bg-brand border border-accent h-fit">
                    <div class="bg-accent text-brand pt-6 px-2 pb-4 text-center mb-4">
                    <h4 class="text-xl">
                        Стандартный
                    </h4>
                    <p class="text-sm">
                    Для совместной работы всей компании или рабочих групп
                    </p>
                    </div>
                    <div class="flex justify-between flex-col text-center min-h-[248px]">
                    <h6 class="text-base mb-5">
                        <span class="text-2xl block">50</span>
                        пользователей
                    </h6>

                    <div class="price-block show h-14">
                        <span class="old-price line-through"></span>
                        <div class="flex justify-center gap-2">
                        <p class="text-brandHeading text-lg ff-dela-gothic-one py-0">
                            <span class="price">6 990</span> р/мес.
                        </p>
                        <span class="discount p-1 bg-accent text-brand hidden skew-x-[-25deg]"></span>
                        </div>
                    </div>

                    <p class="uppercase text-2xl ff-dela-gothic-one mt-auto">100 гб</p>
                    <button class="show-services rounded-2xl py-2 px-4 text-base active mx-auto my-3">О тарифе</button>
                    </div>
                    <div class="services px-3 hidden justify-between h-full flex-col">
                    <ul class="px-1 py-4 border-t border-accent">
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                        Совместная работа
                        <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        <ul>
                            <li class="text-base p-1 pl-4">Чат</li>
                            <li class="text-base p-1 pl-4">Видеозвонки HD</li>
                            <li class="text-base p-1 pl-4">Календарь</li>
                            <li class="text-base p-1 pl-4">Соцсеть компании</li>
                            <li class="text-base p-1 pl-4">Новости</li>
                            <li class="text-base p-1 pl-4">База знаний</li>
                        </ul>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Задачи и Проекты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CRM
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CoPilot
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Онлайн-подпись
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Диск
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Контакт-центр
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Сайты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Интернет-магазин
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Маркетинг
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Документы Онлайн
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Поддержка
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Администрирование
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                    </ul>
                    <a href="{{ route('form.show', ['category' => $service->category->slug]) }}"
                        class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl mb-3 mt-auto">Оставить
                        заявку</a>
                    </div>
                </div>
                <div class="tarif-item rounded-xl overflow-hidden flex flex-col justify-between bg-brand border border-accent h-fit">
                    <div class="bg-accent text-brand pt-6 px-2 pb-4 text-center mb-4">
                    <h4 class="text-xl">
                        Профессиональный
                    </h4>
                    <p class="text-sm">
                        Для максимальной автоматизации всех процессов в компании
                    </p>
                    </div>
                    <div class="flex justify-between flex-col text-center min-h-[248px]">
                    <h6 class="text-base mb-5">
                        <span class="text-2xl block">100</span>
                        пользователей
                    </h6>

                    <div class="price-block show h-14">
                        <span class="old-price line-through"></span>
                        <div class="flex justify-center gap-2">
                        <p class="text-brandHeading text-lg ff-dela-gothic-one py-0">
                            <span class="price">13 990</span> р/мес.
                        </p>
                        <span class="discount p-1 bg-accent text-brand hidden skew-x-[-25deg]"></span>
                        </div>
                    </div>

                    <p class="uppercase text-2xl ff-dela-gothic-one mt-auto">1 024 гб</p>
                    <button class="show-services rounded-2xl py-2 px-4 text-base active mx-auto my-3">О тарифе</button>
                    </div>
                    <div class="services px-3 hidden justify-between h-full flex-col">
                    <ul class="px-1 py-4 border-t border-accent">
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                        Совместная работа
                        <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>
                        <ul>
                            <li class="text-base p-1 pl-4">Чат</li>
                            <li class="text-base p-1 pl-4">Видеозвонки HD</li>
                            <li class="text-base p-1 pl-4">Календарь</li>
                            <li class="text-base p-1 pl-4">Соцсеть компании</li>
                            <li class="text-base p-1 pl-4">Новости</li>
                            <li class="text-base p-1 pl-4">База знаний</li>
                        </ul>
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Задачи и Проекты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CRM
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            CoPilot
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Онлайн-подпись
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Диск
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Контакт-центр
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Сайты
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Интернет-магазин
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Маркетинг
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Документы Онлайн
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Сквозная аналитика
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Автоматизация
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            HR: Компания
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Поддержка
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                        <li class="text-xl font-bold p-1">
                        <div class="flex gap-3 items-center">
                            Администрирование
                            <div class="border border-accent rounded-lg p-[2px] w-12 h-4">
                            <div class="rounded-md overflow-hidden grid grid-cols-3 gap-[2px] h-full">
                                <span class="block bg-accent"></span>
                                <span class="block bg-accent"></span>
                                <span class="block"></span>
                            </div>
                            </div>
                        </div>                  
                        </li>
                    </ul>
                    <a href="{{ route('form.show', ['category' => $service->category->slug]) }}"
                        class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl mb-3 mt-auto">Оставить
                        заявку</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-10">
        <div class="container">
            <div class="lg:text-2xl lg:leading-10 content">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    @if($service->images && $service->images != '[]')
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-gallery.gallery class="justify-center">
                @foreach (getImages($service->images) as $image)
                    <x-gallery.gallery-item :url_full="$image['url']" :title="$image['title']" :desc="$image['desc']" />
                @endforeach
            </x-gallery.gallery>
        </div>
    </section>
    @endempty
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            @if($service->price)
                <p class="pb-8 lg:text-2xl lg:leading-10 text-accent lg:text-onAccent font-bold">Цена {{ $service->price }}</p>
            @endif
            <div class="flex pb-8">
                <div class="w-full md:w-1/3">
                    <a href="{{ route('form.show', ['category' => $service->category?->slug]) }}" class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить заявку</a>
                </div>
            </div>
        </div> 
    </section>
    @if($service->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($service->portfolios as $item)
                    <x-horizontal-scroll.item-case :item="$item" :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
        </div> 
    </section>
    @endif
    @if($service->posts->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Публикации</h3>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                @foreach ($service->posts as $post)
                    <div class="py-2">
                        <a class="hover:text-accent lg:hover:text-onAccent" href="{{ route('post.show',['slug'=> $post->slug ]) }}">{{ $post->title  }}</a>
                    </div>
                @endforeach
            </div>
        </div> 
    </section>
    @endif
</main>
@endsection