@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')

<main class="pt-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container px-0 md:px-4">
            <div class="pb-12">
                <h1>{{ $service->title }}</h1>
            </div>
        </div>
        <div class="container">
            <div class="lg:text-2xl lg:leading-10">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container px-0 md:px-4">
            <div class="pb-12">
                <h2>5 причин вести Яндекс профиль</h2>
            </div>
        </div>
        <div class="container">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-brandLight p-10 rounded-2xl mb-8 order-1">
                    <div>
                        <div class="text-accent lg:text-onAccent text-2xl lg:text-4xl font-bold ff-dela-gothic-one pb-8">20-30%</div>
                    </div>
                    <div class="lg:text-2xl lg:leading-10">пользователей мобильных карт и навигатора строят маршруты при посещении профиля</div>
                </div>
                <div class="bg-accent lg:bg-onAccent p-10 rounded-2xl mb-8 order-3 lg:order-3">
                    <div>
                        <div class="text-brandLight text-2xl lg:text-4xl font-bold ff-dela-gothic-one pb-8">44 млн</div>
                    </div>
                    <div class="lg:text-2xl lg:leading-10 text-brandLight pb-4">пользователей Яндекс карт</div>
                    <div>
                        <img src="{{ asset('template/images/service/2023/03/01/yandex-people-icon.svg') }}" alt="yandex people icon">
                    </div>
                </div>
                <div class="bg-brandLight p-10 rounded-2xl mb-8 order-2 lg:order-3">
                    <div>
                        <div class="text-accent lg:text-onAccent text-2xl lg:text-4xl font-bold ff-dela-gothic-one pb-8">86%</div>
                    </div>
                    <div class="lg:text-2xl lg:leading-10">кликов получают первые десять позиций в результатах поиска на компьютерах</div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="bg-brandLight p-10 rounded-2xl mb-8">
                    <div>
                        <div class="text-accent lg:text-onAccent text-2xl lg:text-4xl font-bold ff-dela-gothic-one pb-8">62,7%</div>
                    </div>
                    <div class="lg:text-2xl lg:leading-10">интернет пользователей России используют поисковую систему Яндекс для поиска информации в интернете</div>
                </div>
                <div class="bg-brandLight p-10 rounded-2xl mb-8">
                    <div>
                        <div class="text-accent lg:text-onAccent text-2xl lg:text-4xl font-bold ff-dela-gothic-one pb-8">75%</div>
                    </div>
                    <div class="lg:text-2xl lg:leading-10">кликов получают первые пять позиций в результатах поиска на мобильных</div>
                </div>
            </div>
        </div>
    </section>
    @if($service->childServices->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="pb-12">
                <h5>Чем мы можем быть полезны?</h5>
            </div>
            <div class="pb-8">
                <x-horizontal-scroll.horizontal-scroll class="lg:gap-16">
                    @foreach ($service->childServices as $item)
                        <x-horizontal-scroll.item-product :item="$item" :url="route('service.show', ['category'=> $service->category->slug,'slug'=> $item->slug])" />
                    @endforeach
                </x-horizontal-scroll.horizontal-scroll>
            </div>
        </div>
    </section>
    @endif
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
    @endif
    @if($service->additional_content)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $service->additional_content !!}
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="flex pb-8">
                <div class="w-full md:w-1/3">
                    <a href="{{ route('form.show') }}" class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить заявку</a>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if($service->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
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