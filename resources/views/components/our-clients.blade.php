<div class="pb-8">
	<marquee class="py-4 ff-dela-gothic-one text-3xl text-brand" scrollamount="10">
        @for ($i = 0; $i <= 10; $i++)
            @forelse ($clients as $client)
                <span class="px-4"><img src="{{ $client->thumbnail }}"></span>•
            @empty
                
            @endforelse
        @endfor
	</marquee>
</div>