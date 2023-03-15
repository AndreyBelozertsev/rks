@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="py-40">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <x-title-with-thumbnail :title="$service->title" :thumbnail="$service->thumbnail" />
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    @if($service->price)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <p class="pb-8 lg:text-2xl lg:leading-10 text-accent lg:text-onAccent font-bold">Цена {{ $service->price }}</p>
        </div> 
    </section>
    @endif
    @if($service->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
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
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
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
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-pre-footer-action :url="route('form.show',['category'=>$service->category->slug, 'url'=>request()->url()])" />
        </div>
    </section>
</main>
@endsection