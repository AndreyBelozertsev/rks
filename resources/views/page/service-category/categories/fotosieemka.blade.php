@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1 class="break-all">{{ $serviceCategory->title }}</h1>
            </div>
            <x-slider.slider class="swiper-photography">
                @foreach(array_reverse(getImages($serviceCategory->images)) as $item)
                    <x-slider.slider-service-category-photography :item="$item" :entity="$serviceCategory"/>
                @endforeach
            </x-slider.slider>
            <div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10 content">
                {!! $serviceCategory->content !!}
            </div>
        </div>
    </section>
    @if($serviceCategory->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($serviceCategory->portfolios as $item)
                    <x-flipper-card :item="$item" :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
        </div> 
    </section>
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10 content">
                <h3>Для чего?</h3>
                <p>Фото, иллюстрации и видео являются неотъемлемой частью успешного сайта. Они помогают повысить заинтересованность и запоминаемость для посетителей, а еще улучшают впечатление о вашем бренде или продукте</p>
                <p>Визуальный контент более эффективно выражает идею или сообщение, чем текст или аудио. Исследования показывают, что люди в 60 тысяч раз быстрее понимают визуальную информацию, чем текстовую. Все потому, что зрение является нашим основным источником внешней информации, и более 80% всех данных, обрабатываемых нашим мозгом, поступает именно через зрение.</p>
                <p>Для создания визуального контента, который привлечет новых клиентов, следует выбирать качественные изображения, которые соответствуют теме и цели вашего сайта и использовать их в подходящем контексте.</p>
                <h3>Съёмка на телефон и фотоаппарат — отличия</h3> 
                <p>Фотосъёмка на фотоаппарате и телефоне имеет ряд существенных различий. Телефоны за счет своего удобного и компактного дизайна, идеально использовать для снимков в дороге или в любых других условиях. А встроенные приложения для обработки изображений и доступ к сети, делает их удобными для мгновенной публикации изображений в социальных сетях.</p>
                <p>С другой стороны, фотоаппараты обычно имеют более мощные оптику и матрицы. Это позволяет захватывать более детальные и яркие изображения в условиях низкой освещённости. Также фотоаппараты имеют широкий диапазон настроек: ISO, выдержка и диафрагма. За счет этого фотограф получает больше контроля над изображением.</p>
            </div>
        </div>
    </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-pre-footer-action 
            url="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}" 
            button_title="Записаться на фотосьемку"
            />
        </div>
    </section>
</main>
@endsection


