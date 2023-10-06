<a href="@if($route){{ route($route)}}@endif" 
    class="btn btn-primary btn-create">
    <i class="fas fa-download"></i> 
    @if($title){{ $title }}@endif
</a>