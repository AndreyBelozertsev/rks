@props([
    'item',
    'url'=> null,
    'iteration',
    'thumbnail' => isset($thumbnail) ? $thumbnail : $item->thumbnail,
 ])
<div class="swiper-slide">
    <div class="bg-brandLight rounded-lg overflow-hidden">
        <div class="pb-8 flex justify-center">
            <img src="{{ $thumbnail }}">
        </div>
        <div class="px-4">
            <div class="flex justify-between pb-6">
                @empty(!$url)
                    <a href="{{ $url }}">
                        <h2 class="leading-loose text-base">{{ $iteration . '. ' . $item->title }}</h2>
                    </a>
                @else
                    <h2 class="leading-loose text-base">{{ $iteration . '. ' . $item->title }}</h2>
                @endempty
                <div class="flex gap-8">
                    <div class="flex md:hidden swiper-button-prev"></div>
                    <div class="flex md:hidden swiper-button-next"></div>
                </div>
            </div>
            <div class="min-h-[150px]">
                {!! $item->description !!}
            </div>
        </div>
    </div>
</div>