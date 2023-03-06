@props([
    'url',  
    'title', 
    'description',
    'number',
    'thumbnail',
    'icon'
])


<div class="lg:grid grid-cols-2 gap-16 pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
    <div class="hidden lg:block">
        <x-subtitle-home class="pb-7" title="{{ $title }}" number="{{ str_pad($number, 2, '0', STR_PAD_LEFT) }}" />
    </div>
    <div class="pb-12">
        <div>
            <div class="pb-8">
                @if($icon)
                    {!! $icon !!}
                @elseif($thumbnail)
                    <img src="{{ $thumbnail }}" alt="{{ $title }}">
                @endif
            </div>
            <div class="pb-8 block lg:hidden">
                <h3>{{  $title  }}</h3>
            </div>
        </div>
        <div class="pb-10 lg:text-2xl lg:leading-10 lg:pb-10">
            {!! $description !!}
        </div>
        <div class="pb-8">
            <a class="text-base underline underline-offset-4 decoration-2 decoration-accent py-2" href="{{ $url }}">Узнать подробнее</a>
        </div>
    </div>
</div>