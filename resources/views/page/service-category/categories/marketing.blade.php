@extends('layouts.app')

@section('content')
<main class="py-28">
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <div class="pb-28 lg:text-2xl lg:leading-10 text-base">
                {!! $serviceCategory->content !!}
            </div>
    </section>
    <section class="py-12">
        <div class="container">
            @forelse ($serviceCategory->services as $service)
                <x-product-item 
                    :url="route('service.show',['category'=> $serviceCategory->slug, 'slug'=> $service->slug ])"
                    :title="$service->title "
                    :description="$service->description"
                    :number="$loop->iteration"
                    :thumbnail="$service->thumbnail"
                />
            @empty
            @endforelse
            </div>
        </div>
    </section>
    @forelse ($serviceCategory->portfolios as $portfolio)
        <a href="{{ route('case.show',['slug'=> $portfolio->slug ]) }}">{{ $portfolio->title  }}</a>
        <br>
    @empty

    @endforelse
    <br><br>
    <section class="pb-12">
        <div class="container">
            <x-pre-footer-action url="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}" />
        </div>
    </section>
</main>
@endsection