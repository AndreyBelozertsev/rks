@extends('layouts.app')

@section('content')

<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>Вакансии</h1>
            </div>
			<div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10 content">
			<p><a href="https://hh.ru/employer/5695970">Наши вакансии на hh.ru</a></p>
			@forelse ($vacancies as $vacancy)
				<div class="pb-4">
					<a href="{{ route('vacancy.show',['slug' => $vacancy->slug]) }}">{{$loop->iteration . '. ' . $vacancy->title }}</a>
					<div class="text-sm">{!! $vacancy->description !!}</div>
				</div>
			@empty
				
			@endforelse 
            </div>
        </div>
    </section>
</main>
@endsection