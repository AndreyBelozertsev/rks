@unless ($breadcrumbs->isEmpty())
<section class="section-bredcrumbs">
    <div class="mb-5 mt-[.90rem]">
        <nav class="container mx-auto">
            <ol class="py-4 flex flex-wrap text-brandGrey-40">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($loop->first)
                        @if($breadcrumb->url)
                            <li class="pr-4">
                                <a href="{{ $breadcrumb->url }}">
                                    <span class="pr-[4px]"><</span> {{ $breadcrumb->title }}
                                </a>
                            </li>
                        @else
                            <li class="pr-4">
                                <span class="pr-[6px]"><</span> {{ $breadcrumb->title }}
                            </li>
                        @endif
                    @elseif( $breadcrumb->url && !$loop->last )
                        <li class="pr-4">
                            <a href="{{ $breadcrumb->url }}">
                                <span class="pr-[4px]"><</span> {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @else
                        <li class="pr-4 hidden lg:list-item">
                            <span class="pr-[6px]"><</span> {{ $breadcrumb->title }}
                        </li>
                    @endif

                @endforeach
            </ol>
        </nav>
    </div>
</section>
@endunless
