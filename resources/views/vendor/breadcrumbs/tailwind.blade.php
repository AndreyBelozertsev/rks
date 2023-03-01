@unless ($breadcrumbs->isEmpty())
<section class="section-bredcrumbs">
    <div class="mb-5 mt-[.95rem]">
        <nav class="container mx-auto">
            <ol class="py-4 flex flex-wrap text-brandGrey-40">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($loop->first)
                        <li>
                            <a href="{{ $breadcrumb->url }}">
                                <span class="pr-[4px]"><</span> {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @elseif( $breadcrumb->url && !$loop->last )
                        <li>
                            <a href="{{ $breadcrumb->url }}">
                                <span class="pr-[4px] pl-4"><</span> {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @else
                        <li>
                            <span class="pr-[6px] pl-4"><</span> {{ $breadcrumb->title }}
                        </li>
                    @endif

                @endforeach
            </ol>
        </nav>
    </div>
</section>
@endunless
