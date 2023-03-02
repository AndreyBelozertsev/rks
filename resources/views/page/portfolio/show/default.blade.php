@extends('layouts.app')

@section('content')

        @dump($portfolio)

        Услуги
        @forelse ($portfolio->services as $service)
            @dump($service)
            <a href="{{ route('service.show',['category'=> $service->category->slug, 'slug'=> $service->slug ]) }}">{{ $service->title }}</a>
            <br>
        @empty
            
        @endforelse

        Статьи

        @forelse ($portfolio->posts as $post)
            <a href="{{ route('article.show',['slug'=> $post->slug ]) }}">{{ $post->title }}</a>
            <br>
        @empty
            
        @endforelse
 
@endsection