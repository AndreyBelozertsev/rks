@extends('layouts.app')

@section('content')

<main class="pt-36 pb-12">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>Кейсы</h1>
            </div>
            <div class="pb-10 flex gap-4">
                <a class="px-2 py-1 border text-xs border-onAccent rounded-md
                @if(!request()->has('category')) 
                    bg-onAccent text-brand
                @else
                    text-onAccent
                @endif
                " href="{{ route('case.index') }}">Все</a>
                <a class="px-2 py-1 border text-xs border-onAccent rounded-md
                @if(request()->get('category') == 'marketing') 
                    bg-onAccent text-brand
                @else
                    text-onAccent
                @endif
                " href="{{ route('case.index', ['category'=>'marketing']) }}">Маркетинг</a>
                <a class="px-2 py-1 border text-xs border-onAccent rounded-md
                @if(request()->get('category') == 'razrabotka') 
                    bg-onAccent text-brand
                @else
                    text-onAccent
                @endif
                " href="{{ route('case.index', ['category'=>'razrabotka']) }}">Разработка</a>
                <a class="px-2 py-1 border text-xs border-onAccent rounded-md
                @if(request()->get('category') == 'fotosieemka') 
                    bg-onAccent text-brand
                @else
                    text-onAccent
                @endif
                " href="{{ route('case.index', ['category'=>'fotosieemka']) }}">Фотосъемка</a>
            </div>
			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 pb-12">
                @forelse ($portfolios as $portfolio)
                    <x-horizontal-scroll.item-case :item="$portfolio" :url="route('case.show',['slug'=>$portfolio->slug])" />
                @empty
                    К сожалению в данный раздел еще не заполнен. 
                @endforelse 
            </div>
            {{ $portfolios->links() }}
        </div>
    </section>
</main>
@endsection