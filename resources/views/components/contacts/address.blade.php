@if(isset($contacts['city']) && !empty($contacts['city']))
    <p>{{ $contacts['city'] }}</p>
@endif
@if(isset($contacts['street']) && !empty($contacts['street']) && isset($contacts['building']) && !empty($contacts['building']))
    <p>{{ $contacts['street'] . ' ' .  $contacts['building']}},</p>
@endif
@if(isset($contacts['office']) && !empty($contacts['office']))
    <p>{{ $contacts['office'] }}</p>
@endif