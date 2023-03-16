@props([
    'url',  
    'title', 
    'description',
    'number',
    'thumbnail',
    'icon'
])


<div class="pb-24" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
    <div class="lg:grid gap-8" style="grid-template-columns: 2fr 4fr">
        <div>
            <div>
                <div class="pb-4 lg:pb-8">
                    @if($icon)
                        {!! $icon !!}
                    @elseif($thumbnail)
                        <img src="{{ $thumbnail }}" alt="{{ $title }}">
                    @endif
                </div>
                <div class="pb-8 block">
                    <h3><a href="{{ $url }}">{{  $title  }}</a></h3>
                </div>
            </div>
        </div>
        <div>
            <div class="pb-8 lg:text-xl lg:leading-10">
                {!! $description !!}  
            </div>
            <a class="text-base underline underline-offset-4 decoration-2 decoration-accent" href="{{ $url }}">Узнать больше</a>
        </div>
    </div>
</div>