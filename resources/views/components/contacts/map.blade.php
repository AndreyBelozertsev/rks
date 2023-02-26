@props(['height' => '210px'])

@if(isset($contacts['coordinates']) && !empty($contacts['coordinates']))
    <div id="map" data-coordinates="{{ $contacts['coordinates'] }}" style="height:{{ $height }}"></div>
@endif