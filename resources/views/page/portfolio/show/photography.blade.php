@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('case.show',$portfolio))
@section('content')
<main class="py-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
                <div>
                    <h1>{{ $portfolio->title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-slider.slider class="swiper-photography gallery-slider">
                @foreach (getImages($portfolio->images) as $image)
                    <x-slider.slider-photography-item :item="$image" />
                @endforeach
            </x-slider.slider>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $portfolio->content !!}
            </div>
        </div>
    </section> 
    @if($portfolio->result)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <h3 class="pb-8">Результат</h3>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $portfolio->result !!}
            </div>
        </div>
    </section>
    @endif
    @if($portfolio->service_description)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <h3 class="pb-8">Услуги</h3>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $portfolio->service_description !!}
            </div>
        </div>
    </section>
    @endif
    @if($portfolio->branch)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <h3 class="pb-8">Отрасль клиента</h3>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $portfolio->branch !!}
            </div>
        </div>
    </section>
    @endif
    @if($portfolio->techology)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <h3 class="pb-8">Используемые технологии</h3>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $portfolio->techology !!}
            </div>
        </div>
    </section>
    @endif 
    @if($portfolio->services->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Оказанные услуги</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($portfolio->services as $item)
                    <x-flipper-card :item="$item" :url="route('service.show',['slug'=>$item->slug,'category' =>$item->category->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
            <div>
        </div> 
    </section>
    @endif
    @if($portfolio->posts->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Публикации</h3>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                @foreach($portfolio->posts as $post)
                    <div class="py-2">
                        <a class="hover:text-accent lg:hover:text-onAccent" href="{{ route('article.show',['slug'=> $post->slug ]) }}">{{ $post->title  }}</a>
                    </div>
                @endforeach
            </div>
        </div> 
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-pre-footer-action text="Готовы запустить проект? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"/>
        </div> 
    </section>
    @endif
@endsection