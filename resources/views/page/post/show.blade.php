@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('post.show',$post))
@section('content')
<main class="pt-48 pb-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <x-title-with-thumbnail :title="$post->title" :thumbnail="$post->thumbnail" />
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $post->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-slider.slider class="swiper-photography gallery-slider">
                @foreach (getImages($post->images) as $image)
                    <x-slider.slider-photography-item :item="$image" />
                @endforeach
            </x-slider.slider>
        </div>
    </section> 
    @if($post->services->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Сопутствующие услуги</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($post->services as $item)
                    <x-flipper-card :item="$item" :url="route('service.show',['slug'=>$item->slug,'category' =>$item->category->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
        </div> 
    </section>
    @endif
    @if($post->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($post->portfolios as $item)
                    <x-horizontal-scroll.item-product :item="$item" :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
        </div> 
    </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-pre-footer-action text="Готовы запустить проект? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"/>
        </div> 
    </section>
</main>
@endsection