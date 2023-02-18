@extends('layouts.app')

@section('content')
    @dump($serviceCategory)
    Услуги
    @forelse ($serviceCategory->services as $service)
        <a href="{{ route('service.show',['category'=> $serviceCategory->slug, 'slug'=> $service->slug ]) }}">{{ $service->title  }}</a>
        <br>
    @empty
        
    @endforelse

    Кейсы

    @forelse ($serviceCategory->portfolios as $portfolio)
        <a href="{{ route('case.show',['slug'=> $portfolio->slug ]) }}">{{ $portfolio->title  }}</a>
        <br>
    @empty
        
    @endforelse


@endsection