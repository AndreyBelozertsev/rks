@props([
    'item',
    'entity' => $item->getTable() ? $item->getTable() : 'object',
    'url' => null
])

<div {{ $attributes->class(['min-w-full md:min-w-[70%] lg:min-w-0 '])}} >
    <div class="rounded-lg overflow-hidden">
        <div class="flip-container" id="{{ $entity }}-{{ $item->slug }}">
            <div class="flipper">
                <div class="front flex justify-between flex-col bg-brandLight w-full">
                    <div>
                        <div class="pb-8">
                            <a 
                                class="block bg-center bg-no-repeat bg-cover h-[250px] md:h-[300px] lg:h-[250px]"
                                style="background-image: url('{{ $item->thumbnail ? asset($item->thumbnail) : asset('template/images/logo.svg') }}')" 
                                href="{{ $url }}"
                            >
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="pb-4">
                                <a href="{{ $url }}">
                                    <h2 class="leading-loose text-lg ff-jura font-bold">{{ $item->title }}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-8">
                        <button data-flip-id="{{ $entity }}-{{ $item->slug }}" class="flipper-button text-base underline underline-offset-4 decoration-2 decoration-accent">Дополнительно</button>
                    </div>
                </div>
                <div class="back flex justify-between flex-col bg-wildSand text-brand pt-6 px-4 w-full">
                    <div>
                        {!! $item->description !!}
                    </div>
                    <div class="pb-8">
                        <button data-flip-id="{{ $entity }}-{{ $item->slug }}" class="flipper-button text-base underline underline-offset-4 decoration-2 decoration-accent">Назад</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
