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
                        <div class="mb-8 h-[250px] md:h-[300px] lg:h-[250px] overflow-hidden">
                            <a 
                                class="block bg-center bg-no-repeat h-[250px] md:h-[300px] lg:h-[250px] hover:scale-110 duration-500"
                                style="background-image: url('{{ $item->thumbnail ? $item->makeThumbnail('nullx700') : asset('template/images/logo.svg') }}'); background-size:cover" 
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
                            @if($item->category)
                            <div class="pb-4">
                                <span class="px-2 py-1 border text-xs border-onAccent text-onAccent rounded-md">#{{ $item->category->title }}</span>           
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="px-4 pb-8">
                        <a href="{{ $url }}" class="text-base underline underline-offset-4 decoration-2 decoration-accent">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
