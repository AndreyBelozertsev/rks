@extends('layouts.app')

@section('content')
    {{ $developmentStage->title }}

    <a href="{{ route('form.show',['category'=> 'razrabotka', 'url'=>request()->url()]) }}">Обсудить проект</a>
 
@endsection