@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-40">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <x-horizontal-scroll.horizontal-scroll class="lightgallery">
                @foreach (array_reverse(getImages($serviceCategory->images)) as $item)
                    @if ($loop->iteration > 4)
                        @break
                    @endif
                    <x-horizontal-scroll.item-photography :item="$item" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
            <div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10">
                {!! $serviceCategory->content !!}
            </div>
        </div>
    </section>
    @if($serviceCategory->portfolios->isNotEmpty())
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <div class="pb-16">
                <h3>Кейсы</h3>
            </div>
            <x-horizontal-scroll.horizontal-scroll>
                @foreach ($serviceCategory->portfolios as $item)
                    <x-flipper-card :item="$item" :url="route('case.show',['slug'=>$item->slug])" />
                @endforeach
            </x-horizontal-scroll.horizontal-scroll>
            <div>
        </div> 
    </section>
    @endif
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-pre-footer-action 
            url="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}" 
            button_title="Записаться на фотосьемку"
            />
        </div>
    </section>
</main>
@endsection