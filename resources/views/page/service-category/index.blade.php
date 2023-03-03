@extends('layouts.app')

@section('content')
<main class="py-28">
    <section class="pb-12">
        <div class="container">
            <div class="pb-12">
                <h1>Услуги</h1>
            </div>
            <div class="pb-28">
                <p class="lg:text-2xl lg:leading-10"><span class="text-accent lg:text-onAccent font-bold">Ракурс</span> — это студия digital маркетинга с широким спектром услуг</p>
                <p class="lg:text-2xl lg:leading-10">Мы разрабатываем, дорабатываем и внедряем цифровой продукт, который помогает бизнесу преодолеть вызовы и решить проблемы, связанные с максимальным охватом в интернете, несмотря на конкуренцию на рынке</p>
            </div>
            <x-pulse-button class="pb-28" />
    </section>
    <section class="py-12" id="anchor">
        <div class="container">
            @forelse($serviceCategories as $category)
                <x-product-item 
                    :url="route('service-category.show', $category->slug)"
                    :title="$category->title"
                    :description="$category->description"
                    :number="$loop->iteration"
                    :thumbnail="$category->thumbnail"
                    :icon="$category->icon"
                />
            @empty
            @endforelse
            </div>
        </div>
    </section>
    <section class="pb-12">
        <div class="container">
            <x-pre-footer-action 
                text="Готовы запустить проект по продвижению? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"
            />
        </div>
    </section>
</main>
@endsection