<div {{ $attributes->class([''])}}>    
    <div class="pb-12">
        <h5>{{ $stages->count() }} шагов на пути к вашему идеальному сайту</h5>
    </div>
    <div class="pb-8 md:px-16 relative">
        <div class="swiper swiper-stages">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @forelse ($stages as $stage)
                    <div class="swiper-slide">
                        <div class="bg-brandGrey-80 rounded-lg overflow-hidden">
                            <div class="pb-8">
                                <img src="{{ $stage->thumbnail }}">
                            </div>
                            <div class="px-4">
                                <div class="flex justify-between pb-6">
                                    <a href="{{ route('development-stage.show',['slug'=> $stage->slug]) }}">
                                        <h2 class="leading-loose text-base">{{ $loop->iteration . '. ' . $stage->title }}</h2>
                                    </a>
                                    <div class="flex gap-8">
                                        <div class="flex md:hidden swiper-button-prev"></div>
                                        <div class="flex md:hidden swiper-button-next"></div>
                                    </div>
                                </div>
                                <div class="min-h-[150px]">
                                    {!! $stage->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="swiper-button-prev hidden md:flex"></div>
        <div class="swiper-button-next hidden md:flex"></div>
    </div>
</div>
