@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="pt-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div>
                <h1 class="pb-10">Создадим сайт с системой бронирования для отелей</h1>
            </div>
            <p class="mb-10 lg:mb-16 lg:text-2xl">
                Создаем сайт удобный для людей, что бы было проще забронировать номер и спланировать отдых. 
                Сайт подойдет гостевым домам и отелям. Ниже представлен пример главной страницы такого сайта.
            </p>
            <div class="h-[500px] xl:h-[765px] overflow-y-auto
                scrollbar:!w-1.5 
                scrollbar:!h-1.5 
                scrollbar-track:!bg-slate-100 
                scrollbar-track:!rounded
                lg:supports-scrollbars:pr-2
            ">
                <img class="block w-full" src="/template/images/service/2023/03/01/sudak-otel.png" alt="hotel">
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10 lg:mb-16">
                Что Вы получите?
            </h3>
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 mb-10 lg:mb-16">
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">01</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Создание сайта для отеля
                        </h4>
                        <p>
                            Мы разрабатываем современные и функциональные сайты, которые привлекают внимание и
                            обеспечивают удобство для ваших
                            гостей. Наши сайты включают:
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Адаптивный дизайн: Идеально отображается на всех устройствах.
                            </li>
                            <li>
                                - Интуитивно понятная навигация: Легкость в использовании для всех пользователей.
                            </li>
                            <li>
                                - SEO-оптимизация: Ваш сайт будет легко находить в поисковых системах.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">02</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Профессиональная фотосъемка
                        </h4>
                        <p>
                            Качественные фотографии играют ключевую роль в привлечении гостей. Мы предлагаем:
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Интерьерная и экстерьерная фотосъемка: Подчеркнем все достоинства вашего отеля.
                            </li>
                            <li>
                                - Профессиональная обработка: Яркие и привлекательные изображения.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">03</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Создание 3D панорам
                        </h4>
                        <p>
                            Погрузите ваших гостей в атмосферу отеля еще до их приезда с помощью 3D панорам:
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Виртуальные туры по номерам и территории: Полное представление о вашем отеле.
                            </li>
                            <li>
                                - Интерактивные элементы: Возможность детально рассмотреть все уголки.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">04</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Привязка системы управления отелем (система управления приобретается отдельно)
                        </h4>
                        <p>
                            Оптимизируйте процессы управления с помощью системы:
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Автоматизация бронирования: Удобство для гостей и персонала.
                            </li>
                            <li>
                                - Управление номерами и услугами: Полный контроль над всеми аспектами работы отеля.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">05</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Настройка метрики
                        </h4>
                        <p>
                            Мы обеспечим точный анализ и мониторинг эффективности вашего сайта:
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Установка и настройка метрики: Полный контроль над посещаемостью и поведением
                                пользователей.
                            </li>
                            <li>
                                - Интуитивно понятная навигация: Легкость в использовании для всех пользователей.
                            </li>
                            <li>
                                - Анализ данных: Поможем вам принимать обоснованные решения для улучшения сервиса.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative rounded-2xl overflow-hidden p-7 bg-brandLight">
                    <svg class="_img opacity-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                        viewBox="2 0 1024 1800" version="1.1">
                        <path d="M371.712 869.888l-61.952 62.464v15.36h404.48v-15.36l-61.952-62.464v-0.512H371.712z"
                            fill="#FFD561"></path>
                        <path d="M371.712 793.088h280.064v76.288H371.712z" fill="#FFA28D"></path>
                        <path
                            d="M947.712 76.288H76.288c-25.6 0-46.592 20.992-46.592 46.592v622.592c0 25.6 20.992 46.592 46.592 46.592h295.936v0.512h280.064v-0.512h295.936c25.6 0 46.592-20.992 46.592-46.592V122.88c0-26.112-20.992-46.592-47.104-46.592zM243.2 792.064H829.44 243.2z m689.152-124.416H91.648V138.24h840.704v529.408z"
                            fill="#5FFFBA"></path>
                    </svg>
                    <p class="text-onAccent text-7xl leading-none ff-dela-gothic-one ml-auto mb-4">06</p>
                    <div class="relative z-[1] lg:text-xl">
                        <h4 class="text-2xl mb-12">
                            Настройка профиля Яндекс.Карт
                        </h4>
                        <p>
                            Оформим профиль в картах, что бы он имел актуальную информацию и привлекал людей совершать
                            выбор в пользу вашего отеля.
                        </p>
                        <ul class="pl-9 grid gap-4">
                            <li>
                                - Проработка местоположения и отрисовка недостающих ориентиров на карте Яндекс.
                            </li>
                            <li>
                                - Проработка визуала профиля, с созданием и публикацией историй и публикации
                            </li>
                            <li>
                                - Привязка профиля к Яндекс.Путешествиям
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex mt-10">
                <div class="w-full md:w-1/3">
                    <button data-modal="modal-analitic" 
                        class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить
                        заявку</button>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Как люди выбирают отель?
            </h3>
            <div class="lg:text-2xl">
                <p class="p-0">
                    При выборе места для отдыха, люди руководствуются различными факторами, но основными являются:
                </p>
                <ul class="pl-3">
                    <li>
                        - Фотографии номеров
                    </li>
                    <li>
                        - Местоположение отеля, гостиницы, дома отдыха
                    </li>
                    <li>
                        - Отзывы оставленные посетителями
                    </li>
                    <li>
                        - Досуг и условия проживания
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div id="photo"></div>
    <section class="pb-10 aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Фотографии номеров
            </h3>
            <div class="lg:text-2xl">
                <p class="p-0">
                    Каждый человек выбирает место отдыха руководствуясь своими визуальными предпочтениями, поэтому важно сделать качественные фотографии. 
                    Качественные профессиональные фотографии привлекают больше внимания благодаря соблюдению правил композиции, а грамотно выстроенный кадр удерживает интерес на более длительное время.
                </p>
            </div>
        </div>
        <div id="photo_shoot"></div>
    </section>
    <section class="pt-8 pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Заказать фотосъемку номеров
            </h3>
            <div class="lg:text-2xl">
                <p class="pb-5">
                    Фотосъемка интерьера и создание панорам номеров входят в услугу создания сайта с системой бронирования.
                </p>
                <p class="pb-10">
                    Если вам необходима просто фотосъемка, нажмите “Заказать фотосъемку”.<br>
                    Ознакомьтесь с примерами наших работ.
                </p>
            </div>
            <div class="pb-10 md:px-16 relative">
                <x-slider.slider class="swiper-photography">
                    @foreach(getImages($service->images) as $image)
                        <x-slider.slider-service-category-photography :item="$image" :entity="$service"/>
                    @endforeach
                </x-slider.slider>
            </div>
            <div class="flex">
                <div class="w-full md:w-1/3">
                    <button data-modal="modal-analitic" 
                        class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Заказать
                        фотосъемку</button>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Местоположение отеля, гостиницы, дома отдыха
            </h3>
            <div class="lg:text-2xl">
                <p class="p-0">
                    Местоположение легко отобразить в карте на сайте гостиницы, но лучше разместить информацию о своем объекте еще и на Яндекс.Картах, 2ГИС. Это поможет людям найти вас, при поиске по определенной удаленности от моря, парка и прочего. Помимо метки на карте можно добавить виды из окна или территории.
                </p>
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Отзывы оставленные посетителями
            </h3>
            <div class="lg:text-2xl">
                <p class="p-0">
                    По данным исследования ВЦИОМ от 50 до 80% пользователей интернета доверяют отзывам. Поэтому важно работать с отзывами и следить за репутацией организации и рейтингом на отзовиках.
                </p>
                <p class="p-0">
                    В гостиничном бизнесе это работает следующим образом:
                </p>
                <ul class="list-point">
                    <li>
                        Когда потенциальные гости видят положительные отзывы реальных людей на независимых платформах, они с большей охотой совершают бронирование.
                    </li>
                    <li>
                        Когда отзывы на гостиницу, отель или гостевой дом, имеют негативный окрас, это отталкивает возможных
                        постояльцев.
                        Поэтому важно такие отзывы прорабатывать. Тогда потенциальный гость будет видеть ситуацию с обеих
                        сторон и сможет
                        сформировать свое собственное мнение.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Досуг и условия проживания
            </h3>
            <div class="lg:text-2xl">
                <p class="pb-5">
                    Если, ваш гостевой бизнес направлен на долгострочное проживание, то важно продумать досуг гостей.
                </p>
                <p>
                    Информация о досуге которая помогает выделить вас на фоне конкурентов, поможет привлечь больше людей на
                    отдых именном к
                    вам. <br>Описание условий проживания подкрепленные фотографиями или видео обзором номеров, территории
                    сформируют больше
                    доверия.
                </p>
            </div>
        </div>
    </section>
    <section class="pb-[90px]">
        <div class="container">
            <h2 class="mb-10 text-2xl">
                Почему стоит заказать сайт для гостевого бизнеса у нас
            </h2>
            <div class="flex justify-center lg:justify-between gap-5 text-center text-xl flex-wrap lg:flex-nowrap">
                <div class="flex flex-col items-center max-w-[300px] lg:max-w-[350px]">
                    <svg class="fill-onAccent mb-5 w-20 h-20" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 100 100"
                        version="1.1" xml:space="preserve">

                        <g id="network" />

                        <g id="connection" />

                        <g id="page" />

                        <g id="support" />

                        <g id="configuration" />

                        <g id="cloud_storage" />

                        <g id="password" />

                        <g id="search_engine" />

                        <g id="history" />

                        <g id="SEO">

                            <g>

                                <path
                                    d="M82,4H18c-2.8,0-5,2.2-5,5v67c0,2.8,2.2,5,5,5h25v12c0,1.7,1.3,3,3,3h8c1.7,0,3-1.3,3-3V81h25c2.8,0,5-2.2,5-5V9    C87,6.2,84.8,4,82,4z M55,93c0,0.6-0.4,1-1,1h-8c-0.6,0-1-0.4-1-1V74c0-0.6,0.4-1,1-1h8c0.6,0,1,0.4,1,1V93z M72.2,31.4L71,29.2    l8.5,0.9l-3.5,8l-1-1.8c-0.1-0.2-0.4-0.4-0.6-0.5c-0.3-0.1-0.5,0-0.8,0.1l-7.5,4.7c0,0,0,0,0,0L49,51.5l-5.4-8.3    c-0.1-0.2-0.4-0.4-0.6-0.4c-0.3-0.1-0.5,0-0.8,0.2l-7.8,5.4C34.1,47.2,34,46.1,34,45c0-0.3,0-0.6,0-0.9l10.4-7l5.4,8.3    c0.3,0.5,0.9,0.6,1.4,0.3L65,37c0,0,0,0,0,0c0,0,0,0,0,0l6.8-4.3C72.3,32.4,72.5,31.8,72.2,31.4z M66,45c0,8.8-7.2,16-16,16    c-6.8,0-12.8-4.2-15.1-10.6l7.5-5.2l5.4,8.3c0.2,0.3,0.5,0.5,0.8,0.5c0.2,0,0.4,0,0.5-0.2l16.7-10.6C66,43.8,66,44.4,66,45z     M34.4,41.3C36.1,34.2,42.5,29,50,29c5.3,0,10.1,2.5,13.1,6.9L51,43.4l-5.4-8.3c-0.1-0.2-0.4-0.4-0.6-0.4c-0.3-0.1-0.5,0-0.8,0.1    L34.4,41.3z M64.8,34.7C61.5,29.8,56,27,50,27c-9.3,0-17.1,7.2-17.9,16.4C32,43.8,32,44.4,32,45c0,1.8,0.3,3.6,0.8,5.3    C35.1,57.8,42,63,50,63c9.9,0,18-8.1,18-18c0-1-0.1-1.9-0.3-2.9l2.7-1.7c0.3,1.5,0.5,3.1,0.5,4.7c0,11.6-9.4,21-21,21    c-8.6,0-16.5-5.4-19.6-13.5c-0.7-1.9-1.2-3.8-1.3-5.8C29,46.1,29,45.5,29,45c0-11.6,9.4-21,21-21c7,0,13.4,3.4,17.4,9.2L64.8,34.7    z M53,67.8V71h-6v-3.2c1,0.1,2,0.2,3,0.2C51,68,52,67.9,53,67.8z M85,76c0,1.7-1.3,3-3,3H57v-5c0-1.3-0.8-2.4-2-2.8v-3.7    C65.3,65.2,73,56,73,45c0-2-0.3-3.9-0.8-5.8l1.5-1l1.4,2.6c0.2,0.3,0.5,0.5,0.9,0.5c0.4,0,0.7-0.2,0.9-0.6l4.9-11.1    c0.1-0.3,0.1-0.6-0.1-0.9s-0.4-0.5-0.8-0.5L69.3,27c-0.4,0-0.7,0.1-0.9,0.4c-0.2,0.3-0.2,0.7,0,1l1.7,3l-0.9,0.6    C64.8,25.7,57.7,22,50,22c-12.7,0-23,10.3-23,23c0,0.4,0,0.9,0,1.3l-8.6,5.8c-0.4,0.3-0.6,0.9-0.3,1.3l3,5.1    c0.1,0.2,0.4,0.4,0.6,0.5c0.1,0,0.1,0,0.2,0c0.2,0,0.4-0.1,0.6-0.2l6.5-4.4c3,6.6,9,11.5,16,13v3.8c-1.2,0.4-2,1.5-2,2.8v5H18    c-1.7,0-3-1.3-3-3V18h70V76z M28.3,52.5l-6,4.1l-2-3.4l6.9-4.7C27.5,49.9,27.8,51.2,28.3,52.5z M85,16H15V9c0-1.7,1.3-3,3-3h64    c1.7,0,3,1.3,3,3V16z" />

                                <circle cx="79" cy="11" r="2" />

                                <circle cx="73" cy="11" r="2" />

                                <circle cx="67" cy="11" r="2" />

                            </g>

                        </g>

                        <g id="optimization" />

                        <g id="backlink" />

                        <g id="performance" />

                        <g id="analytics" />

                        <g id="security" />

                        <g id="dark_web" />

                        <g id="video_player" />

                        <g id="upload_download" />

                        <g id="incognito_tab" />

                        <g id="bookmark" />

                    </svg>
                    <p class="text-lg lg:text-xl">
                        Создадим адаптивный <br>сайт с бронированием
                    </p>
                </div>
                <div class="flex flex-col items-center max-w-[300px] lg:max-w-[350px]">
                    <svg class="stroke-onAccent mb-5 w-20 h-20" xmlns="http://www.w3.org/2000/svg" width="800px"
                        height="800px" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M3 10H4C4.93188 10 5.39782 10 5.76537 10.1522C6.25542 10.3552 6.64477 10.7446 6.84776 11.2346C7 11.6022 7 12.0681 7 13C7 13.9319 7 14.3978 6.84776 14.7654C6.64477 15.2554 6.25542 15.6448 5.76537 15.8478C5.39782 16 4.93188 16 4 16H3M19 6V5C19 3.89543 18.1046 3 17 3H15C13.8954 3 13 3.89543 13 5V6M6.2 20H17.8C18.9201 20 19.4802 20 19.908 19.782C20.2843 19.5903 20.5903 19.2843 20.782 18.908C21 18.4802 21 17.9201 21 16.8V9.2C21 8.07989 21 7.51984 20.782 7.09202C20.5903 6.71569 20.2843 6.40973 19.908 6.21799C19.4802 6 18.9201 6 17.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V16.8C3 17.9201 3 18.4802 3.21799 18.908C3.40973 19.2843 3.71569 19.5903 4.09202 19.782C4.51984 20 5.07989 20 6.2 20ZM17 13C17 14.6569 15.6569 16 14 16C12.3431 16 11 14.6569 11 13C11 11.3431 12.3431 10 14 10C15.6569 10 17 11.3431 17 13Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-lg lg:text-xl">
                        Проведем фотосъемку <br>номеров и территории
                    </p>
                </div>
                <div class="flex flex-col items-center max-w-[300px] lg:max-w-[350px]">
                    <svg class="stroke-onAccent mb-5 w-20 h-20" xmlns="http://www.w3.org/2000/svg" width="800px"
                        height="800px" viewBox="0 0 192 192" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="12"
                            d="M95.997 22a58.897 58.897 0 0 0-32.772 9.985 59.174 59.174 0 0 0-21.728 26.56 59.386 59.386 0 0 0-3.368 34.191 59.269 59.269 0 0 0 16.125 30.312c10.688 10.722 35.841 26.232 37.33 42.525.223 2.434 1.987 4.427 4.413 4.427s4.196-1.993 4.413-4.427c1.488-16.293 26.622-31.777 37.304-42.492a59.274 59.274 0 0 0 16.151-30.313 59.383 59.383 0 0 0-3.354-34.205 59.176 59.176 0 0 0-21.73-26.574A58.897 58.897 0 0 0 95.997 22v0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="12"
                            d="M95.997 101.6a20.806 20.806 0 0 1-14.708-6.092 20.8 20.8 0 1 1 14.708 6.092v0Z" />
                    </svg>
                    <p class="text-lg lg:text-xl">
                        Оформим профиль <br>организации на картах
                    </p>
                </div>
                <div class="flex flex-col items-center max-w-[300px] lg:max-w-[350px]">
                    <svg class="fill-onAccent mb-5 w-20 h-20" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 100 100"
                        version="1.1" xml:space="preserve">

                        <g id="backpack">

                            <g>

                                <path
                                    d="M50,39c2.8,0,5-2.2,5-5s-2.2-5-5-5s-5,2.2-5,5S47.2,39,50,39z M50,31c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3    S48.3,31,50,31z" />

                                <path
                                    d="M72,53H28c-3.3,0-6,2.7-6,6v7c0,12.7,10.3,23,23,23h10c12.7,0,23-10.3,23-23v-7C78,55.7,75.3,53,72,53z M76,66    c0,11.6-9.4,21-21,21H45c-11.6,0-21-9.4-21-21v-7c0-2.2,1.8-4,4-4h44c2.2,0,4,1.8,4,4V66z" />

                                <path
                                    d="M70,60h-2.1h-1.8H30c-0.6,0-1,0.4-1,1s0.4,1,1,1h34.8l-0.7,2.9c-0.3,1,0,2.2,0.6,3c0.6,0.7,1.4,1.1,2.3,1.1    s1.7-0.4,2.3-1.1c0.6-0.8,0.9-1.9,0.6-3L69.2,62H70c0.6,0,1-0.4,1-1S70.6,60,70,60z M68,65.4c0.1,0.4,0,0.9-0.2,1.3    C67.6,66.8,67.4,67,67,67s-0.6-0.2-0.7-0.4c-0.3-0.3-0.4-0.8-0.2-1.3l0.8-3.4h0.2L68,65.4z" />

                                <path
                                    d="M96,68.1c0-13.2-8.8-25.2-9.2-25.7C86.6,42.1,86.3,42,86,42h-7.7l-7.9-20.2c-0.9-2.3-3.1-3.8-5.6-3.8H62v-2    c0-6.6-5.4-12-12-12S38,9.4,38,16v2h-2.8c-2.5,0-4.7,1.5-5.6,3.8L21.7,42H14c-0.3,0-0.6,0.1-0.8,0.4C12.8,42.9,4,54.9,4,68.1    C4,79.8,15.8,80.9,17.7,81c5.2,9.1,15.1,15,26,15h12.5c11,0,20.9-5.9,26.1-15C84.2,80.9,96,79.8,96,68.1z M85.5,44    c0.5,0.6,1.4,2.1,2.5,4h-7.3l-1.6-4H85.5z M40,16c0-5.5,4.5-10,10-10s10,4.5,10,10v2h-3v-2c0-3.9-3.1-7-7-7s-7,3.1-7,7v2h-3V16z     M45,18v-2c0-2.8,2.2-5,5-5s5,2.2,5,5v2H45z M64.8,20c0.4,0,0.8,0.1,1.2,0.2L65.4,27C64.6,35,58,41,50,41s-14.6-6-15.4-14L34,20.2    c0.4-0.1,0.8-0.2,1.2-0.2H64.8z M14.5,44h6.4l-1.6,4H12C13.1,46.1,14.1,44.6,14.5,44z M6,68.1c0-6.8,2.6-13.4,5-18.1c0,0,0,0,0,0    h7.5L16,56.6c-2.2,5.7-2.6,12-1,17.9c0.4,1.5,1,3,1.6,4.5C13.5,78.5,6,76.7,6,68.1z M56.2,94H43.8c-12.6,0-23.6-8.3-26.8-20.1    c-1.5-5.5-1.2-11.4,0.9-16.6l13.6-34.7c0.2-0.4,0.4-0.8,0.7-1.1l0.5,5.7C33.5,36.2,40.9,43,50,43s16.5-6.8,17.4-15.8l0.5-5.7    c0.3,0.3,0.5,0.7,0.7,1.1l13.6,34.7c2.1,5.3,2.4,11.2,0.9,16.6C79.8,85.7,68.8,94,56.2,94z M83.4,78.9c0.7-1.4,1.2-2.9,1.6-4.5    c1.6-5.9,1.3-12.2-1-17.9L81.5,50H89c0,0,0,0,0,0c2.4,4.6,5,11.2,5,18.1C94,76.7,86.5,78.5,83.4,78.9z" />

                            </g>

                        </g>

                        <g id="camping" />

                        <g id="transportation" />

                        <g id="navigation" />

                        <g id="hotel" />

                        <g id="money" />

                        <g id="signpost" />

                        <g id="ticket" />

                        <g id="schedule" />

                        <g id="beach" />

                        <g id="mountain" />

                        <g id="location" />

                        <g id="traveling" />

                        <g id="bonfire" />

                        <g id="camera" />

                        <g id="medicine" />

                        <g id="drink" />

                        <g id="canned_food" />

                        <g id="nature" />

                        <g id="map" />

                    </svg>
                    <p class="text-lg lg:text-xl">
                        Привяжем сайт и профиль <br>к Яндекс.Путешествиям
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-[90px] aos-init aos-animate" data-aos="fade-in" data-aos-easing="linear"
        data-aos-duration="1000">
        <div class="container">
            <h3 class="mb-10">
                Готовы заказать сайт для гостевого бизнеса?
            </h3>
            <div class="flex mb-10">
                <div class="w-full md:w-1/3">
                    <button data-modal="modal-analitic" 
                        class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Готов
                        заказать</button>
                </div>
            </div>
        </div>
    </section>
@endsection