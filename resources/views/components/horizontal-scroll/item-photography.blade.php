@props([
    'item'
 ])
<a href="{{ asset($item['url']) }}" class="w-full h-full flex-shrink-0 relative block transition-transform">
    <div class="rounded-lg overflow-hidden">
        <div>
            <img src="{{ asset($item['url']) }}">
        </div>
    </div>
</a>