@extends('layouts.app')
@section('content')
<main class="pt-28">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
			<div class="pb-12">
				<h1>{{ $data['title'] }}</h1>
			</div>
            <div class="pb-12">
                {{ $data['content'] }}
            </div>
            <div class="flex justify-center">
                <video style="height:400px" controls>
                    <source src='{{ asset("storage/video/$slug") }}'
                    type="video/mp4">
                </video>
            </div>
        </div>
    </section>
</main>