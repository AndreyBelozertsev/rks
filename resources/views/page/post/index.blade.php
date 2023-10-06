@extends('layouts.app')

@section('content')

<main class="py-36">
    <section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="container">
            <div class="pb-12">
                <h1>Блог</h1>
            </div>
			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 pb-12">
                @forelse ($posts as $post)
                    <x-horizontal-scroll.item-post :item="$post" :url="route('post.show',['slug'=>$post->slug])" />
                @empty
                    К сожалению данный раздел еще не заполнен. 
                @endforelse 
            </div>
            {{ $posts->links() }}
        </div>
    </section>
</main>
@endsection