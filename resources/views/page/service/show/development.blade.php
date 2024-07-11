@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="pt-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container px-0 md:px-4">
            <x-title-with-thumbnail :title="$service->title" :thumbnail="$service->thumbnail" />
        </div>
        <div class="container">
            <div class="lg:text-2xl lg:leading-10 content">
                {!! $service->content !!}
            </div>
        </div>
    </section>

    @if($service->images)
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
    @if($service->price)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <p class="pb-8 lg:text-2xl lg:leading-10 text-accent lg:text-onAccent font-bold">Цена {{ $service->price }}</p>
            <div class="flex pb-8">
                <div class="w-full md:w-1/3">
                    <a href="{{ route('form.show',['category'=>$service->category?->slug, 'url'=>request()->url()]) }}" class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить заявку</a>
                </div>
            </div>
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
                    <x-horizontal-scroll.item-case :item="$item" :url="route('case.show',['slug'=>$item->slug])" bgSize="contain" />
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