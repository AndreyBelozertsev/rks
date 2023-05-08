@extends('layouts.app')
@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <div class="pb-8 lg:pb-20 lg:text-2xl lg:leading-10 text-base content">
                {!! $serviceCategory->content !!}
            </div>
    </section>
    <section class="py-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container grid gap-16">
            @forelse ($serviceCategory->services as $service)
                <x-product-item 
                    :url="route('service.show',['category'=> $serviceCategory->slug, 'slug'=> $service->slug ])"
                    :title="$service->title "
                    :description="$service->description"
                    :number="$loop->iteration"
                    :thumbnail="$service->thumbnail"
                    :icon="$service->icon"
                />
            @empty
            @endforelse
            </div>
        </div>
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-pre-footer-action 
                url="{{ route('form.show',['category'=>$serviceCategory->slug, 'url'=>request()->url()]) }}" 
                text="Готовы запустить проект по продвижению? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"
            />
        </div>
    </section>
</main>
@endsection