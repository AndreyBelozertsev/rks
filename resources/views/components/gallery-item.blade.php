@props([
    'url_full',
    'url_crop => null',
    'title'  => null,
    'desc' => null
 ])

<a href="{{ asset($url_full) }}"
    data-lg-size="1600-2400" 
    data-sub-html="<div class='lightGallery-captions'><h4>{{ $title }}</h4><p>{{ $desc }}</p></div>">
    <img alt="{{ $title }}" src="{{ asset( !empty( $url_crop ) ? $url_crop : $url_full )  }}" />
</a>