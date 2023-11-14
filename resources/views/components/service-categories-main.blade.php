<div class="lg:grid grid-cols-2 gap-32">
    <div>
        <x-subtitle-home class="pb-0 lg:pb-8" title="Услуги" number="02" />
        <div class="pb-8">
            <p>Поможем решить задачи любой сложности: от&nbspразработки дизайна и&nbspнастройки контекстной рекламы до&nbspсоздания корпоративных CRM-систем и&nbspприложений.</p>
        </div>
    </div>
    <div>
        <div class="hidden lg:flex flex-col pt-10 pb-20">
            @forelse ($serviceCategories as $category)
                <div class="flex">
                    <a href="{{ route('service-category.show', $category->slug) }}" 
                    class="uppercase hover:text-onAccent text-5xl ff-dela-gothic-one border-solid divide-wildSand border-t-2 leading-loose @if($loop->last) border-b-2 @endif">{{ $category->title }}</a>
                </div>
            @empty
            @endforelse
        </div>
        <div class="pb-4 lg:pb-0">
            <a class="text-base underline underline-offset-4 decoration-2 decoration-accent py-2" href="{{ route('service-category.index') }}">Узнать больше</a>
        </div>
    </div>
</div>