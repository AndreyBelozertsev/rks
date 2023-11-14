@extends('layouts.app')

@section('breadcrumbs')
    <x-back-arrow :url="url()->previous()" />
@endsection
@section('content')
<main class="pt-48 pb-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <div class="pb-12">
				<h1>{{ $page->title }}</h1>
			</div>
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $page->content !!}
            </div>
        </div>
    </section>
</main>
@endsection