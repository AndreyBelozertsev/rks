@extends('layouts.app')

@section('content')

<main class="py-16 lg:py-20">
	 <div class="container">
        @dump($contacts);
	</div>
 </main>
@endsection