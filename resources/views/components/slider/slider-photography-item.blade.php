@props([
    'item'
 ])
 <a class="swiper-slide" href="{{ asset($item['url']) }}">
    <div class="rounded-lg overflow-hidden">
        <div>
            <img src="{{ asset($item['url']) }}">
        </div>
    </div>
</a>