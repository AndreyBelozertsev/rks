<div>

    @forelse ($stages as $stage)
        <a href="{{ route('development-stage.show',['slug'=> $stage->slug]) }}">{{ $stage->title }}</a>

    @empty
        
    @endforelse
</div>