@extends('layouts.app')

@section('content')

<main class="py-16 lg:py-20">
	 <div class="container">
        @dump($post);
	</div>
    @forelse ($post->services as $service)
        @dump($service)
        <a href="{{ route('service.show',['slug'=>$service->slug,'category'=>$service->category->slug]) }}">{{ $service->title  }}</a>
        <br>
    @empty
        
    @endforelse
</main>
@endsection