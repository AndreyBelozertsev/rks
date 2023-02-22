@extends('layouts.app')

@section('content')
    Форма
    @if ($errors->any())
        @dump($errors )
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    <form action="{{ route('form.show') }}" method="POST">
        @csrf
        <input type="hidden" name="url" value="{{ request()->get('url') ? request()->get('url') : url()->previous() }}">
        <input type="text" name="name">
        <input type="text" name="phone">
        <input type="text" name="email">
        <x-service-categories-inputs />

        <textarea name="comment"></textarea>
        <label><input type="checkbox" name="agree">Согласен с политикой обработки перс данных</label>
        <input type="submit" value="Отправить">
    </form>
    <br>
    <br>
    <hr>
    <form action="{{ route('form.send-modal') }}" method="POST">
        @csrf
        <input type="hidden" name="url" value="{{ request()->get('url') ? request()->get('url') : url()->previous() }}">
        <input type="text" name="name">
        <input type="text" name="phone">
        <input type="text" name="email">
        <label><input type="checkbox" name="agree">Согласен с политикой обработки перс данных</label>
        <input type="submit" value="Отправить">
    </form>
 
@endsection