@extends('layouts.app')

@section('content')
    @dump($serviceCategory)
    @forelse ($serviceCategory->services as $service)
        @dump( $service )
    @empty
        
    @endforelse
@endsection