@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10">
                {!! $serviceCategory->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-development-stages-slider/>
        </div>
    </section>
    @if($serviceCategory->services->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="pb-12">
                <h5>Виды сайтов</h5>
            </div>
            <div class="pb-8">
                <x-horizontal-scroll.horizontal-scroll>
                    @foreach ($serviceCategory->services as $item)
                        <x-flipper-card :item="$item" :url="route('service.show', ['category'=> $item->category->slug,'slug'=> $item->slug])" />
                    @endforeach
                </x-horizontal-scroll.horizontal-scroll>
            </div>
        </div>
    </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="pb-12">
                <h5>Попробуйте бесплатно</h5>
            </div>                
            <div class="lg:grid grid-cols-2 gap-32">
                <div class="block pb-12 lg:pb-0">
                    <p class="lg:text-2xl lg:leading-10 lg:pb-10">Мы готовы помочь вам определиться с видом сайта, а для этого необходимо выполнить первый пункт из нашего списка. Сделайте свой первый шаг к созданию сайта вместе с нами</p>
                </div>
                <div>
                    <button data-modal="modal-analitic" class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Получить аналитику</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection