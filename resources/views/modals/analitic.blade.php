<div id="modal-analitic" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-30"></div>
    <div class="modal-container bg-brand w-full md:w-11/12 md:max-w-md max-h-screen mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="py-2 text-left px-6">
            <div class="flex justify-end items-center">
                <div data-modal="modal-analitic" class="modal-close cursor-pointer z-50">
                    X
                </div>
            </div>
            <div class="pb-3">
                <h4 class="leading-loose pb-4">Заполните поля ниже для получения анализа пути пользователя</h4>

                <form class="contact-form" action="{{ route('form.send-modal') }}" method="POST">
                    <input type="hidden" name="url" value="{{ request()->get ? request()->get : url()->previous() }}">
                    <div class="py-2">
                            <x-forms.text-input class="py-2" placeholder="Ваше имя" required="required" name="name"/>
                    </div>
                    <div class="py-2">
                            <x-forms.text-input placeholder="Номер телефона" class="phone-number py-2" required="required" name="phone"/>
                    </div>
                    <div class="py-2">
                            <x-forms.text-input class="py-2" type="email" placeholder="E-mail" name="email"/>
                    </div>
                    <div class="py-3">
                        <textarea 
                            class="w-full bg-brandGrey-80 outline-none rounded-xl border border-brandGrey-40 py-2 px-4"
                            placeholder="Вы можете поделиться с нами деталями или контекстом проекта" 
                            name="comment"
                            rows="3"
                        ></textarea>
                    </div>
  
                    <div class="py-3">
                        <div class="custom-checkbox-mark inline text-left"> 
                            <input type="checkbox" id="custom-checkbox-agree" name="agree">
                            <label for="custom-checkbox-agree">
                                <span>Согласен с политикой обработки персональных данных</span>
                            </label>
                            <p class="text-error text-sm feedback-error hidden" id="agree-error">
                                <img class="inline align-bottom" src="{{ asset('template/icon/warning-filled.svg') }}">
                                <span></span>
                            </p>
                        </div>
                    </div>
                    <div class="py-3">
                        <input class="animation-pulse bg-accent lg:bg-onAccent disabled:bg-brandGrey-10 disabled:cursor-not-allowed text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl font-bold" type="submit" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>