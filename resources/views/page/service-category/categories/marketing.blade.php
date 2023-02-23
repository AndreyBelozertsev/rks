@extends('layouts.app')

@section('content')
    
    Услуги
    @forelse ($serviceCategory->services as $service)
        <a href="{{ route('service.show',['category'=> $serviceCategory->slug, 'slug'=> $service->slug ]) }}">{{ $service->title  }}</a>
        <br>
    @empty
        
    @endforelse
    <br><br>
    Кейсы

    @forelse ($serviceCategory->portfolios as $portfolio)
        <a href="{{ route('case.show',['slug'=> $portfolio->slug ]) }}">{{ $portfolio->title  }}</a>
        <br>
    @empty

    @endforelse
    <br><br>


    <a href="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}">Обсудить проект</a>
@endsection