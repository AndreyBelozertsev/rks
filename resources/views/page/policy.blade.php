@extends('layouts.app')

@section('breadcrumbs')
    <x-back-arrow :url="url()->previous()" />
@endsection

@section('content')    

<main class="pt-36">
	<section class="pb-12">
        <div class="container">
            <div>
                <h1 class="pb-12">Политика обработки персональных данных</h1>
            </div>
            <div class="content">
                {!! $policy !!}
            </div>
        </div>
    </section>
</main>
@endsection