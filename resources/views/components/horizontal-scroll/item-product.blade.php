@props([
    'item',
    'entity' => $item->getTable() ? $item->getTable() : 'object',
    'url' => null,
])

<div {{ $attributes->class(['min-w-full md:min-w-[70%] lg:min-w-0 '])}} >
    <div class="rounded-lg overflow-hidden">
        <div>
            <div>
                <div class="flex justify-between flex-col bg-brandLight w-full">
                    <div>
                        <div class="mb-8 overflow-hidden">
                            <a href="{{ $url }}">
                                <img 
                                class="hover:scale-110 duration-500"
                                src="{{ $item->thumbnail ? $item->makeThumbnail('600x600') : asset('template/images/logo.svg') }}">
                            </a>
                        </div>
                        <div class="px-4">
                            <div class="pb-4">
                                <a href="{{ $url }}">
                                    <h2 class="leading-loose text-lg ff-jura font-bold">{{ $item->title }}</h2>
                                </a>
                            </div>
                            @isset($item->price)
                                <div class="pb-4">
                                    <p class="text-accent md:text-onAccent">{{ $item->price }}</p>
                                </div>
                            @endisset
                        </div>
                    </div>
                    <div class="px-4 pb-8">
                        <a href="{{ $url }}" class="text-base underline underline-offset-4 decoration-2 decoration-accent">Дополнительно</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
