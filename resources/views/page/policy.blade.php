@extends('layouts.app')

@section('breadcrumbs')
    <x-back-arrow :url="url()->previous()" />
@endsection

@section('content')    

<main class="pt-48 pb-36">
	<section class="pb-12">
        <div class="container">
            <div>
                <h1 class="pb-12">{{ $page->title }}</h1>
            </div>
            <div class="content">
                {!! $page->content !!}
            </div>
        </div>
    </section>
</main>
@endsection