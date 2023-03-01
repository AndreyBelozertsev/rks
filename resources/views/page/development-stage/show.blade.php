@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('development-stage.show',$developmentStage))
@section('content')
<main class="py-40">
	<section class="pb-12">
		<div class="container">
            <div class="pb-12">
                <div class="h-40 w-full bg-no-repeat bg-cover py-4 px-8 bg-center" style="background-image: linear-gradient(to top, rgba(26, 32, 44, .44) 0%, rgba(26, 32, 44, 1) 100%) , url('{{ $developmentStage->thumbnail }}')">
                    <div class="pb-12 z-index-1">
                        <h1>{{ $developmentStage->title }}</h1>
                    </div>
                </div>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $developmentStage->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12">
		<div class="container">
            <div id="lightgallery" class="flex flex-col md:flex-row pb-12 gap-12">
                @foreach (getImages($developmentStage->images) as $image)
                    <a href="{{ asset($image['url']) }}" data-lg-size="1600-2400" 
                        data-sub-html="<div class='lightGallery-captions'><h4>{{ $image['title'] }}</h4><p>{{ $image['desc'] }}</p></div>">
                        <img alt="img1" src="{{ asset($image['url']) }}" />
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <x-pre-footer-action url="{{ route('form.show',['category' => 'razrabotka']) }}" />
        </div>
    </section>
</main>
@endsection