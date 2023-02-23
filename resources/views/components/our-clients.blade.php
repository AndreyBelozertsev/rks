<div class="pb-8">
	<marquee class="py-4 ff-dela-gothic-one text-3xl text-brand" scrollamount="3">
            @forelse ($clients as $client)
                <span class="px-4"><img src="{{ $client->thumbnail }}"></span>•
            @empty
                
            @endforelse
            @forelse ($clients as $client)
                <span class="px-4"><img src="{{ $client->thumbnail }}"></span>•
            @empty
                
            @endforelse
	</marquee>
</div>