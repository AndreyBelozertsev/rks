<div class="pb-8 md:px-16 relative">
    <div {{ $attributes->class(['swiper']) }}">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            {{ $slot }}
        </div>
    </div>
    <div class="swiper-button-prev hidden md:flex"></div>
    <div class="swiper-button-next hidden md:flex"></div>
</div>