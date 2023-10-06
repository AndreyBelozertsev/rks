@extends('layouts.app')

@section('breadcrumbs')
    <x-back-arrow :url="url()->previous()" />
@endsection

@section('content')    

<main class="pt-36">
	<section class="pb-12">
        <div class="container">
            <div>
                <h1 class="pb-12">Ответьте на несколько вопросов и <span class="text-accent lg:text-onAccent">получите скидку или бесплатный анализ</span> для вашего бизнеса</h1>
            </div>
            <div class="content">
                <script src="https://yastatic.net/s3/frontend/forms/_/embed.js"></script>
                <iframe src="https://forms.yandex.ru/u/6502de09e010db373df18a72/?iframe=1&quot; frameborder="0" name="ya-form-6502de09e010db373df18a72" width="100%"></iframe>
            </div>
        </div>
    </section>
</main>
@endsection