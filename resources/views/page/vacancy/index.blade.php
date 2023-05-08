@extends('layouts.app')

@section('content')

<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>Вакансии</h1>
            </div>
			<div class="pb-8 lg:text-2xl lg:leading-10 lg:pb-10 content">
			@forelse ($vacancies as $vacancy)
				<div class="pb-4">
					<a href="{{ route('vacancy.show',['slug' => $vacancy->slug]) }}">{{$loop->iteration . '. ' . $vacancy->title }}</a>
					<div class="text-sm">{!! $vacancy->description !!}</div>
				</div>
			@empty
				К сожалению в данный момент нет открытых вакансий, можете выслать Ваше резюме для формирования кадрового резерва - <a href="mailto:info.rakurs@bk.ru">info.rakurs@bk.ru</a>. 
			@endforelse 
            </div>
        </div>
    </section>
</main>
@endsection