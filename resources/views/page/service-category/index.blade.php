@extends('layouts.app')

@section('content')

    @forelse ($serviceCategories as $category)
        <a href="{{ route('service-category.show', $category->slug) }}">{{ $category->title }}</a>
        @dump($category)
    @empty
        
    @endforelse
@endsection