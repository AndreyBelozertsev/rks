@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('development-stage.show',$developmentStage))
@section('content')
<main class="py-40">
	<section class="pb-12">
		<div class="container">
            <x-title-with-thumbnail :title="$developmentStage->title" :thumbnail="$developmentStage->thumbnail" />

            <div class="pb-8 lg:text-2xl lg:leading-10">
                {!! $developmentStage->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12">
		<div class="container">
            <x-gallery>
                @foreach (getImages($developmentStage->images) as $image)
                    <x-gallery-item :url_full="$image['url']" :title="$image['title']" :desc="$image['desc']" />
                @endforeach
            </x-gallery>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <x-pre-footer-action url="{{ route('form.show',['category' => 'razrabotka']) }}" />
        </div>
    </section>
</main>
@endsection