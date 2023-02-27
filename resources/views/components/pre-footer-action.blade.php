<div {{ $attributes->class(['lg:grid grid-cols-2 gap-32'])}} >
    <div class="hidden lg:block">
        <p class="lg:text-2xl lg:leading-10 lg:pb-10">Готовы запустить проект по продвижению? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным</p>
    </div>
    <div>
        <a href="{{ route('form.show') }}" class="bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Обсудить проект</a>
    </div>
</div>