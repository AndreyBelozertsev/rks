@extends('layouts.app')

@section('content')
<main class="py-12">
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <div class="pb-8">
                {!! $serviceCategory->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <x-development-stages-slider class="pb-12" />
        </div>
    </section>
</main>
    dump($serviceCategory)
    forelse ($serviceCategory->services as $service)
        dump( $service )
    empty
        
    endforelse
    


    <a href="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}">Обсудить проект</a>
@endsection