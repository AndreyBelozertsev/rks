@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('service-category.show',$serviceCategory)) 
@section('content')
<main class="py-40">
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h1>{{ $serviceCategory->title }}</h1>
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10">
                {!! $serviceCategory->content !!}
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <x-development-stages-slider/>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h5>Виды сайтов</h5>
            </div>
            <div class="pb-8">
                <div class="flex lg:grid lg:grid-cols-2 xl:grid-cols-4 gap-8 overflow-x-scroll lg:overflow-x-hidden pb-10 pr-16 md:pr-0">
                    @forelse ($serviceCategory->services as $service)
                        <div class="min-w-full md:min-w-[70%] lg:min-w-0" >
                            <div class="rounded-lg overflow-hidden">
                                <div class="flip-container" id="service-{{ $service->slug }}">
                                    <div class="flipper">
                                        <div class="front flex justify-between flex-col bg-brandGrey-80 w-full">
                                            <div>
                                                <div class="pb-8">
                                                    <a 
                                                        class="block bg-center bg-no-repeat bg-cover h-[250px] md:h-[300px] lg:h-[250px]"
                                                        style="background-image: url('{{ $service->thumbnail }}')" 
                                                        href="{{ route('service.show', ['category'=> $service->category->slug,'slug'=> $service->slug]) }}"
                                                    >
                                                    </a>
                                                </div>
                                                <div class="px-4">
                                                    <div class="pb-4">
                                                        <a href="{{ route('service.show', ['category'=> $service->category->slug,'slug'=> $service->slug]) }}">
                                                            <h2 class="leading-loose text-base">{{ $loop->iteration . '. ' . $service->title }}</h2>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 pb-8">
                                                <button data-flip-id="service-{{ $service->slug }}" class="flipper-button text-base underline underline-offset-4 decoration-2 decoration-accent">Дополнительно</button>
                                            </div>
                                        </div>
                                        <div class="back flex justify-between flex-col bg-wildSand text-brand pt-6 px-4 w-full">
                                            <div>
                                                {!! $service->description !!}
                                            </div>
                                            <div class="pb-8">
                                                <button data-flip-id="service-{{ $service->slug }}" class="flipper-button text-base underline underline-offset-4 decoration-2 decoration-accent">Назад</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h5>Попроубуйте бесплатно</h5>
            </div>                
            <div class="lg:grid grid-cols-2 gap-32">
                <div class="block pb-12">
                    <p class="lg:text-2xl lg:leading-10 lg:pb-10">Мы готовы помочь вам определиться с видом сайта, а для этого необходимо выполнить первый пункт из нашего списка. Сделайте свой первый шаг к созданию сайта вместе с нами</p>
                </div>
                <div>
                    <button data-modal="modal-analitic" class="modal-open-button w-full bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Получить аналитику</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection