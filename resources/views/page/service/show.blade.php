@extends('layouts.app')

@section('content')
    @dump($service)

    Кейсы

    @forelse ($service->portfolios as $portfolio)
        <a href="{{ route('case.show',['slug'=> $portfolio->slug ]) }}">{{ $portfolio->title  }}</a>
        <br>
    @empty
        
    @endforelse

    Статьи

    @forelse ($service->posts as $post)
        <a href="{{ route('article.show',['slug'=> $post->slug ]) }}">{{ $post->title  }}</a>
        <br>
    @empty
        
    @endforelse

    <a href="{{ route('form.show',['category'=>$category, 'url'=>request()->url()]) }}">Обсудить проект</a>

@endsection