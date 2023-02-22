@extends('layouts.app')

@section('content')
    dump($serviceCategory)
    forelse ($serviceCategory->services as $service)
        dump( $service )
    empty
        
    endforelse
    <x-development-stages-slider />


    <a href="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}">Обсудить проект</a>
@endsection