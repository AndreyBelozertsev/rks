@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('development-stage.show',$developmentStage))
@section('content')
<main class="py-40">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <x-title-with-thumbnail :title="$developmentStage->title" :thumbnail="$developmentStage->thumbnail" />

            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $developmentStage->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
            <x-slider.slider class="swiper-default gallery-slider">
                @foreach (getImages($developmentStage->images) as $image)
                    <x-slider.slider-photography-item :item="$image" />
                @endforeach
            </x-slider.slider>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-pre-footer-action url="{{ route('form.show',['category' => 'razrabotka']) }}" />
        </div>
    </section>
</main>
@endsection