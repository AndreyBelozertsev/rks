@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="py-40">
	<section class="pb-12">
		<div class="container">
            <div class="pb-12">
                <h1>{{ $service->title }}</h1>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    @if($service->images)
    <section class="pb-12">
		<div class="container">
            <x-gallery.gallery class="justify-center">
                @foreach (getImages($service->images) as $image)
                    <x-gallery.gallery-item :url_full="$image['url']" :title="$image['title']" :desc="$image['desc']" />
                @endforeach
            </x-gallery.gallery>
        </div>
    </section>
    @endif
    @if($service->additionalServices->isNotEmpty())
    <section class="pb-12">
		<div class="container">
            <div class="pb-12">
                <h3>Форматы</h3>
            </div>
            <x-slider.slider class="swiper-default">
                @foreach ($service->additionalServices as $item)
                    <x-slider.slider-product-item :item="$item" :thumbnail="$item->makeThumbnail('345x220','resize')" :iteration="$loop->iteration" />
                @endforeach
            </x-slider.slider>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    @endif
    @if($service->portfolios->isNotEmpty())
    <section class="pb-12">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($service->portfolios as $item)
                    <x-flipper-card :item="$item" :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
            <div>
        </div> 
    </section>
    @endif
    @if($service->posts->isNotEmpty())
    <section class="pb-12">
		<div class="container">
            <div class="pb-16">
                <h3>Публикации</h3>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                @foreach ($service->posts as $post)
                    <div class="py-2">
                        <a class="hover:text-accent lg:hover:text-onAccent" href="{{ route('article.show',['slug'=> $post->slug ]) }}">{{ $post->title  }}</a>
                    </div>
                @endforeach
            </div>
        </div> 
    </section>
    @endif
    <section class="pb-12">
		<div class="container">
            <x-pre-footer-action :url="route('form.show',['category'=>$service->category->slug, 'url'=>request()->url()])" />
        </div>
    </section>
</main>
@endsection