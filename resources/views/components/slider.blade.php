@props([
    'slider_class' => null
 ])
<div {{ $attributes->class(['pb-8 md:px-16 relative']) }}>
    <div class="swiper {{ $slider_class }}">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            {{ $slot }}
        </div>
    </div>
    <div class="swiper-button-prev hidden md:flex"></div>
    <div class="swiper-button-next hidden md:flex"></div>
</div>