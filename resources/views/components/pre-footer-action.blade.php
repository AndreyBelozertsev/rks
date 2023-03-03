@props([
    'url' => route('form.show'),
    'text' => null,
    'button_title' => 'Обсудить проект'
])

<div {{ $attributes->class(['lg:grid grid-cols-2 gap-32'])}} >
    <div class="hidden lg:block">
        <p class="lg:text-2xl lg:leading-10 lg:pb-10">{{ $text }}</p>
    </div>
    <div>
        <a href="{{ $url }}" class="bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">{{ $button_title }}</a>
    </div>
</div>