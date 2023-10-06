<div id="modal-feedback" style="opacity:0;pointer-events:none" class="modal fixed w-full h-full top-0 left-0 flex items-end md:items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-30"></div>
    <div class="relative">
        <div class="modal-container bg-wildSand w-full md:w-11/12 md:max-w-md mx-auto rounded z-50 overflow-y-auto">
            <div class="py-2 text-left px-6">
                <div class="flex justify-end items-center">
                    <div data-modal="modal-feedback" class="modal-close cursor-pointer text-brand z-50">
                        X
                    </div>
                </div>
                <div class="text-brand modal-content text-center pb-6">
                    Жаль, что Вы собираетесь покинуть наш сайт!
                    Будем Вам очень признательны за обратную связь по работе сайта.
                    
                </div>
                <div class="py-3">
                    <a href="{{ route('getFeedback') }}" class="animation-pulse bg-accent lg:bg-onAccent disabled:bg-brandGrey-10 disabled:cursor-not-allowed text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl font-bold">Пройти опрос</a>
                </div>
            </div>
        </div>
    </div>
</div>