@props([
    'item'
 ])
<div class="swiper-slide">
    <div class="rounded-lg overflow-hidden">
        <div>
            <img src="{{ asset($item['url']) }}">
        </div>
    </div>
</div>