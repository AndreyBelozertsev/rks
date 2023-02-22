@forelse ($categories as $category)
    <label><input type="checkbox" name="services[{{ $category->slug }}]" @if (request()->get('category') == $category->slug) checked @endif>{{ $category->title }}</label>
@empty

@endforelse