<div class="flex flex-wrap gap-6 lg:gap-10">
    @forelse ($categories as $category)

        <input 
            class="custom-checkbox-bg hidden" 
            id="service-{{$category->slug}}" 
            type="checkbox" 
            name="services" 
            value="{{ $category->slug }}"
            @if (request()->get('category') == $category->slug) checked @endif
        >
        <label class="rounded-2xl label-custom-checkbox-bg py-2 px-4 border-solid border-onAccent border" for="service-{{$category->slug}}">
            {{ $category->title }}
        </label>
    @empty

    @endforelse

</div>