@props([
    'type'=>'text',
    'isError' => false,
    'value' => '',
    'required' => '',
    'name' => '',
    'placeholder' => '',
    'id' => ''

])

<label class="relative" for="{{ $id }}">
        <input 
            {{ $required }}
            name="{{ $name }}"
            {{ $attributes
                ->class(
                    [
                        'input-error'=> $isError,
                        'placeholder-brandGrey-40 bg-brand border-solid border-brandGrey-40 border-b w-full py-3 px-2 outline-none'
                    ]
                )
            }}
            type="{{ $type }}"
            @if(! $required) 
                placeholder="{{ $placeholder }}"
            @endif

            id="{{ $id }}"
        >
       
        @if($required)
            <span class="absolute -top-1 left-2 cursor-text" placeholder="{{ $placeholder }}"></span>
        @endif
        <br>
        <span class="text-error text-sm feedback-error hidden" id="{{ $name }}-error">
            <img class="inline align-bottom" src="{{ asset('template/icon/warning-filled.svg') }}" alt="ошибка">
            <span>Ошибка</span>
        </span>
</label>

