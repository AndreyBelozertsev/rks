<div {{ $attributes->class([]) }}>    
    <div class="pb-12">
        <h5>{{ $stages->count() }} шагов на пути к вашему идеальному сайту</h5>
    </div>
    <x-slider.slider class="swiper-default">
        @foreach ($stages as $item)
            <x-slider.slider-product-item :item="$item" :url="route('development-stage.show',['slug'=> $item->slug])" :iteration="$loop->iteration" />
        @endforeach
    </x-slider.slider>
</div>
