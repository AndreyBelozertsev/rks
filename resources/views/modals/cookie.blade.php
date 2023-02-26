<div id="modal-cookie" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-end md:items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-30"></div>
    <div class="relative">
        <div class="modal-container bg-wildSand w-full md:w-11/12 md:max-w-md mx-auto rounded z-50 overflow-y-auto">
            <div class="py-2 text-left px-6">
                <div class="flex justify-end items-center">
                    <div data-modal="modal-cookie" class="modal-close cursor-pointer text-brand z-50">
                        X
                    </div>
                </div>
                <div class="text-brand modal-content text-center pb-6">
                    @isset($cookie_text)
                        {{ $cookie_text }}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>