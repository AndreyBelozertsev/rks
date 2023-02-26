@if(isset($contacts['phone1']) && !empty($contacts['phone1']))
    <p><a href="tel:{{ $contacts['phone1'] }}">{{ $contacts['phone1'] }}</a></p>
@endif
@if(isset($contacts['phone2']) && !empty($contacts['phone2']))
    <p><a href="tel:{{ $contacts['phone2'] }}">{{ $contacts['phone2'] }}</a></p>
@endif
@if(isset($contacts['email']) && !empty($contacts['email']))
    <p><a href="mailto:{{ $contacts['email'] }}">{{ $contacts['email'] }}</a></p>
@endif