@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
    @dump($serviceCategory)
    @forelse ($serviceCategory->services as $service)
        @dump( $service )
    @empty
        
    @endforelse

    <a href="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}">Обсудить проект</a>
@endsection