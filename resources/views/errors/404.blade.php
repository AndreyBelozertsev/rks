@extends('layouts.app')
@section('content')
<section class="section-error my-8">
    <div class="container px-6 py-8">
        <div class="mb-4">
            <h1>Страница не найдена</h1>
        </div> 
        <div class="flex flex-col mt-10">
            <div>
                <p>Указанная ссылка неактуальна. Но нам есть, что вам рассказать</p>
                <div class="flex py-6">
                    <a href="{{ route('home') }}" class="bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
