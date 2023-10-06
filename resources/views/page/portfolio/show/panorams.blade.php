@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('case.show',$portfolio))
@section('content')
<main class="py-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <x-title-with-thumbnail :title="$portfolio->title" />
        </div>
    </section>
    @if($portfolio->url)
    <section class="pb-10" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <div class="flex justify-items-center overflow-hidden">
                <iframe src="{{ $portfolio->url }}" width="100%" height="500px" title="{{ $portfolio->title }}">
                    При загрузке произошла ошибка
                </iframe>
            </div>
        </div>
    </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $portfolio->content !!}
            </div>
        </div>
    </section> 
    @if($portfolio->services->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Оказанные услуги</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($portfolio->services as $item)
                    <x-horizontal-scroll.item-product :item="$item" :url="route('service.show',['slug'=>$item->slug,'category' =>$item->category->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
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
                            <a class="hover:text-accent lg:hover:text-onAccent" href="{{ route('post.show',['slug'=> $post->slug ]) }}">{{ $post->title  }}</a>
                        </div>
                    @endforeach
                </div>
            </div> 
        </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
        <x-pre-footer-action text="Хотите также?"/>
        </div> 
    </section>

</main>
@endsection