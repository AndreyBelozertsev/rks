@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('article.show',$post))
@section('content')
<main class="py-40">
	<section class="pb-12">
		<div class="container">
            <x-title-with-thumbnail :title="$post->title" :thumbnail="$post->thumbnail" />
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $post->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12">
		<div class="container">
            <x-slider.slider class="swiper-photography gallery-slider">
                @foreach (getImages($post->images) as $image)
                    <x-slider.slider-photography-item :item="$image" />
                @endforeach
            </x-slider.slider>
        </div>
    </section> 
    @if($post->services->isNotEmpty())
    <section class="pb-12">
		<div class="container">
            <div class="pb-16">
                <h3>Сопутствующие услуги</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($post->services as $item)
                    <x-flipper-card :item="$item" :url="route('service.show',['slug'=>$item->slug,'category' =>$item->category->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
            <div>
        </div> 
    </section>
    <section class="pb-12">
		<div class="container">
        <x-pre-footer-action text="Готовы запустить проект? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"/>
        </div> 
    </section>
    @endif
@endsection