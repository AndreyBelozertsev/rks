@extends('layouts.app')

@section('content')
<main class="py-28">
    <section class="pb-12">
        <div class="container">
            <div class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-anchor-placement="center-bottom">
                <h1>Услуги</h1>
            </div>
            <div class="pb-24" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                <p class="lg:text-2xl lg:leading-10"><span class="text-accent lg:text-onAccent font-bold">Ракурс</span> — это студия digital-маркетинга.</p>
                <p class="lg:text-2xl lg:leading-10">Интернет-маркетинг помогает бизнесу преодолеть вызовы и&nbspрешить проблемы, связанные с&nbspмаксимальным охватом в&nbspинтернете, несмотря на&nbspконкуренцию на&nbspрынке. Поэтому к&nbspнам&nbspобращаются, когда нужно разработать, доработать и&nbspвнедрить цифровой продукт.</p>
            </div>
            <x-pulse-button class="pb-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000" />
        </div>
    </section>
    <section class="py-12" id="anchor" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
        <div class="container grid gap-16">
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
    </section>
    <section class="pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <x-pre-footer-action 
                text="Готовы запустить проект по продвижению? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным"
            />
        </div>
    </section>
</main>
@endsection