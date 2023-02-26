@unless ($breadcrumbs->isEmpty())
<section class="section-bredcrumbs">
    <div class="my-5">
        <nav class="container mx-auto">
            <ol class="py-4 flex flex-wrap text-brandGrey-40">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($breadcrumb->url && !$loop->last)
                        <li>
                            <a href="{{ $breadcrumb->url }}">
                                <span class="pr-[6px]"><</span> {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @else
                        <li>
                            <span class="pr-[6px]"><</span> {{ $breadcrumb->title }}
                        </li>
                    @endif

                    @unless($loop->last)
                        <li>
                            <span class="pr-[6px]"><</span>
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</section>
@endunless
