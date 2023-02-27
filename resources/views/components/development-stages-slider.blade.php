<div {{ $attributes->class([''])}}>    
    <div class="pb-12">
        <h5>{{ $stages->count() }} шагов на пути к вашему идеальному сайту</h5>
    </div>
    <div class="pb-8">
        <div class="swiper" effect="cards" grab-cursor="true">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" effect="cards" grab-cursor="true">
                @forelse ($stages as $stage)
                    <div class="swiper-slide" effect="cards" grab-cursor="true">
                        <div>
                            <div><img src="{{ $stage->thumbnail }}"></div>
                            <div>
                                <div>
                                    <a href="{{ route('development-stage.show',['slug'=> $stage->slug]) }}">
                                        <h2 class="leading-loose">{{ $loop->iteration . '. ' . $stage->title }}</h2>
                                    </a>
                                </div>
                                <div>
                                    {!! $stage->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
