@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service.show',$service))
@section('content')
<main class="pt-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container px-0 md:px-4">
            <x-title-with-thumbnail :title="$service->title" :thumbnail="$service->thumbnail" />
        </div>
        <div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $service->content !!}
            </div>
            <div class="flex pb-8">
                <div class="w-full md:w-1/3">
                    <a href="{{ route('form.show') }}" class="w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Оставить заявку</a>
                </div>
            </div>
        </div>
    </section>
    @if($service->additional_content)
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $service->additional_content !!}
            </div>
        </div>
    </section>
    @endif
    @if($service->additionalServices->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-12">
                <h2>SEO включает:</h2>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-16">
                @foreach ($service->additionalServices as $item)
                    <div class="bg-brandLight p-10 rounded-2xl relative mb-8 lg:mb-0">
                        <div class="relative z-[1] pt-12">
                            <div>
                                <div class="text-2xl font-bold ff-dela-gothic-one pb-12">{{ $item->title }}</div>
                            </div>
                            <div class="lg:text-2xl lg:leading-10 content">{!! $item->description !!}</div>
                        </div>
                        <span class="hidden lg:inline absolute top-0 text-brandGrey-100 text-[180px] leading-none ff-dela-gothic-one z-0">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                @endforeach
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