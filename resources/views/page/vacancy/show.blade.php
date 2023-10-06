@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('vacancy.show',$vacancy))
@section('content')
<main class="py-36">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
            <x-title-with-thumbnail :title="$vacancy->title" />
            <div class="pb-8 lg:text-2xl lg:leading-10 content">
                {!! $vacancy->content !!}
            </div>
            <div class="pb-8 lg:text-2xl lg:leading-10">
                <h4 class="pb-2">Заинтересовала вакансия?</h4> Отправляй резюме на почту <a href="mailto:info.rakurs@bk.ru">info.rakurs@bk.ru</a>
            </div>
        </div>
    </section>
</main>
@endsection