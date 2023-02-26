@extends('layouts.app')

@section('content')
<main class="py-12">
	<div class="container">
		<div class="pb-12">
			<h1>Услуги</h1>
		</div>
        <div class="pb-40">
            <p class="lg:text-2xl lg:leading-10"><span class="text-onAccent font-bold">Ракурс</span> — это студия digital маркетинга с широким спектром услуг</p>
            <p class="lg:text-2xl lg:leading-10">Мы разрабатываем, дорабатываем и внедряем цифровой продукт, который помогает бизнесу преодолеть вызовы и решить проблемы, связанные с максимальным охватом в интернете, несмотря на конкуренцию на рынке</p>
        </div>
        <div class="flex justify-center pb-24">
				<button class="pulse-button" id="pulse-button">
					<span class="pulse-button__icon"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
				</button>
		</div>
        <div class="py-12" id="anchor">
        @forelse ($serviceCategories as $category)
            <div class="lg:grid grid-cols-2 gap-16 pb-20">
				<div class="hidden lg:block">
					<x-subtitle-home class="pb-7" title="{{ $category->title }}" number="{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}" />
				</div>
				<div class="pb-12">
                    <div>
                        <div class="pb-8">
                            <img src="{{ $category->thumbnail }}" alt="{{ $category->title }}">
                        </div>
                        <div class="pb-8 block lg:hidden">
                            <h3>{{  $category->title  }}</h3>
                        </div>
                    </div>
					<div class="pb-10 lg:text-2xl lg:leading-10 lg:pb-10">
                        {!! $category->description !!}
					</div>
					<div class="pb-8">
						<a class="text-base underline underline-offset-4 decoration-2 decoration-accent py-2" href="{{ route('service-category.show', $category->slug) }}">Узнать больше</a>
					</div>
				</div>
			</div>
        @empty
        @endforelse
        </div>
    </div>
</main>
@endsection