@props([
    'item',
    'entity'
 ])
 <a class="swiper-slide" href="{{ asset($item['url']) }}">
    <div class="rounded-lg overflow-hidden">
        <div>
            <img src="{{ asset($entity->makeThumbnailFromImg('345x320', $item['url'], 'fit'))}}" alt="slide">
        </div>
    </div>
</a>