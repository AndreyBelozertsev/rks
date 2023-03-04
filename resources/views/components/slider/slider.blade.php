<div class="pb-8 md:px-16 relative">
    <div {{ $attributes->class(['swiper mb-8 md:mb-0']) }}">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            {{ $slot }}
        </div>
    </div>
    <div class="swiper-pagination md:hidden"></div>
    <div class="swiper-button-prev hidden md:flex"></div>
    <div class="swiper-button-next hidden md:flex"></div>
</div>