@if(isset($contacts['vk']) && !empty($contacts['vk']))
    <a href="{{ $contacts['vk'] }}">
        <img src="{{ asset('template/icon/vk.svg') }}" alt="vk">
    </a>
@endif
@if(isset($contacts['telegram']) && !empty($contacts['telegram']))
    <a href="{{ $contacts['telegram'] }}">
        <img src="{{ asset('template/icon/tg.svg') }}" alt="telegram">
    </a>
@endif
@if(isset($contacts['whatsapp']) && !empty($contacts['whatsapp']))
    <a href="{{ $contacts['whatsapp'] }}">
        <img src="{{ asset('template/icon/whatsapp.svg') }}" alt="whatsapp">
    </a>
@endif
@if(isset($contacts['youtube']) && !empty($contacts['youtube']))
    <a href="{{ $contacts['youtube'] }}">
        <img src="{{ asset('template/icon/youtube.svg') }}" alt="youtube">
    </a>
@endif