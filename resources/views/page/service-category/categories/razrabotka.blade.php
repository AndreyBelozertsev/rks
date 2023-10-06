@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1 class="break-all">{{ $serviceCategory->title }}</h1>
            </div>
            <div class="gap-32">
                <div class="block pb-12 lg:pb-0">
                    <p class="lg:text-2xl lg:leading-10 lg:pb-10">Разработаем сайт с индивидуальным дизайном под Ваши цели. Поможем решить задачи любой сложности: от создания одностраничного сайта до корпоративных CRM-систем и приложений.</p>
                </div>
                <div class="flex pb-8">
                    <div class="w-full md:w-1/3">
                        <button data-modal="modal-analitic" class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить заявку</button>
                    </div>
                </div>
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
                <h5>Стоимость разработки</h5>
            </div>
            <div class="pb-8">
                <x-horizontal-scroll.horizontal-scroll class="lg:gap-16">
                    @foreach ($serviceCategory->services as $item)
                        <x-horizontal-scroll.item-product :item="$item" :url="route('service.show', ['category'=> $item->category->slug,'slug'=> $item->slug])" />
                    @endforeach
                </x-horizontal-scroll.horizontal-scroll>
            </div>
        </div>
    </section>
    @endif
    @if($serviceCategory->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($serviceCategory->portfolios as $item)
                    <x-horizontal-scroll.item-case :item="$item" bgSize='contain' :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
        </div> 
    </section>
    @endif
</main>
@endsection