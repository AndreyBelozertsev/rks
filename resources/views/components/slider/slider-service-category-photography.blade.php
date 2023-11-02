@props([
    'item',
    'entity',
 ])
 <div class="swiper-slide">
    <div class="rounded-lg overflow-hidden flex justify-center">
        <div>
            <img src="{{ asset($entity->makeThumbnailFromImg('345x320', $item['url'], 'fit'))}}" alt="slide">
        </div>
    </div>
</div>