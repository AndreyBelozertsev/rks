@props([
    'title', 
    'thumbnail' => null
])

<div @if($thumbnail) class="pb-12" @endif>
    <div class="@if($thumbnail) h-40 w-full bg-no-repeat bg-cover py-4 px-8 bg-center @endif" 
        @if($thumbnail) 
            style="background-image: linear-gradient(to top, rgba(26, 32, 44, .44) 0%, rgba(26, 32, 44, 1) 100%) , url('{{ asset($thumbnail) }}')" 
        @endif>
        <div class="pb-12">
            <h1>{{ $title }}</h1>
        </div>
    </div>
</div>