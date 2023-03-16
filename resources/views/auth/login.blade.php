@extends('layouts.auth')

@section('title','Вход в аккаунт')
@section('content')
<x-forms.auth-forms 
    title="Вход в аккаунт" 
    action="{{ route('login.handle') }}"
    method="POST"
>


    <div class="py-2">
        <x-forms.text-input class="py-3" type="email" placeholder="E-mail" name="email"/>
    </div>
    @error('email')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
    @enderror
    <div class="py-2">
        <x-forms.text-input class="py-3" type="password" placeholder="Пароль" name="password"/>
    </div>


    <x-forms.primary-button>Вход</x-forms.primary-button>

    <x-slot:buttons>
        <div class="space-y-3 mt-5">
            <div class="text-xxs md:text-xs"><a href="{{ route('password.forgot') }}" class="text-white hover:text-white/70 font-bold">Забыли пароль?</a></div>
        </div>
    </x-slot:buttons>    

</x-forms.auth-forms>
@endsection