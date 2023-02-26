@extends('layouts.app')

@section('content')
    @if(url()->previous() == request()->url() )
        {{ Breadcrumbs::render('home') }}
    @else
        <x-back-arrow :url="url()->previous()" />
    @endif
    
    <section class="forms pb-10 lg:mb-4">
            <div class="container">
                <h2 class="pb-12">Готовы создать эффективный маркетинг вместе с нами?</h2>
            </div>
            <div class="container">
                <div class="pb-8">
                    <p class="text-xl pb-6">Мы свяжемся с вами, чтобы:</p>
                    <p>Определить задачу</p>
                    <p>Ответить на ваши вопросы</p>
                    <p>Предоставить информацию о ценах</p>
                </div>
                <div>
                    <form class="contact-form" action="{{ route('form.show') }}" method="POST">
                        <input type="hidden" name="url" value="{{ request()->get('url') ? request()->get('url') : url()->previous() }}">
                        <div class="py-6">
                                <x-forms.text-input class="py-3" placeholder="Ваше имя" required="required" name="name"/>
                        </div>
                        <div class="py-6">
                                <x-forms.text-input class="phone-number py-3" placeholder="Номер телефона" required="required" name="phone"/>
                        </div>
                        <div class="py-6">
                                <x-forms.text-input class="py-3" type="email" placeholder="E-mail" name="email"/>
                        </div>
                        <div class="lg:grid grid-cols-2 gap-32">
                            <div class="py-6">
                                <p class="text-lg pb-6">Услуга:</p>
                                <x-forms.service-categories-inputs />
                            </div>
                            <div class="py-6">
                                <textarea 
                                    class="w-full bg-brandGrey-80 outline-none rounded-xl border border-brandGrey-40 py-2 px-4"
                                    placeholder="Вы можете поделиться с нами деталями или контекстом проекта" 
                                    name="comment"
                                    rows="5"
                                ></textarea>
                            </div>
                        </div>
                        <div class="py-6">
                            <div class="custom-checkbox-mark">
                                <input type="checkbox" id="custom-checkbox-agree" name="agree">
                                <label for="custom-checkbox-agree"><span>Согласен с политикой обработки персональных данных</span></label>
                                <p class="text-error text-sm feedback-error hidden" id="agree-error">
                                    <img class="inline align-bottom" src="{{ asset('template/icon/warning-filled.svg') }}">
                                    <span></span>
                                </p>
                            </div>
                        </div>
                        <div class="py-6">
                            <input class="animation-pulse bg-accent lg:bg-onAccent disabled:bg-brandGrey-10 disabled:cursor-not-allowed text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl font-bold" type="submit" value="Отправить">
                        </div>
                    </form>
                </div>
            </div>
    </section>
 
@endsection