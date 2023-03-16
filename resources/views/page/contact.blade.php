@extends('layouts.app')
@section('content')
<main class="pt-28">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
			<div class="pb-12">
				<h1>Контакты</h1>
			</div>
			<div class="flex flex-row flex-wrap">
				<div class="order-1 md:order-0 md:block w-full md:w-1/2 lg:w-2/3 md:pr-10">
					<x-contacts.map height="500px" />
				</div>
				<div class="w-full order-0 md:order-1 md:w-1/2 lg:w-1/3">
					<div class="pb-8">
						<div class="hidden md:block pb-8">
							<h3>Связаться с нами</h3>
						</div>
						<div class="pb-8 lg:pb-4 text-xl lg:leading-10">
							@if(isset($contacts['phone1']) && !empty($contacts['phone1']))
    							<p class="py-0"><a href="tel:{{ $contacts['phone1'] }}">{{ $contacts['phone1'] }}</a></p>
							@endif
							@if(isset($contacts['phone2']) && !empty($contacts['phone2']))
								<p class="py-0"><a href="tel:{{ $contacts['phone2'] }}">{{ $contacts['phone2'] }}</a></p>
							@endif
							@if(isset($contacts['email']) && !empty($contacts['email']))
								<p><a href="mailto:{{ $contacts['email'] }}">{{ $contacts['email'] }}</a></p>
							@endif
													</div>
						<div class="pb-16 md:pb-4 text-xl lg:leading-10">
							@if(isset($contacts['city']) && !empty($contacts['city']))
								<p class="py-0">{{ $contacts['city'] }}</p>
							@endif
							@if(isset($contacts['street']) && !empty($contacts['street']) && isset($contacts['building']) && !empty($contacts['building']))
								<p class="py-0">{{ $contacts['street'] . ' ' .  $contacts['building']}},</p>
							@endif
							@if(isset($contacts['office']) && !empty($contacts['office']))
								<p class="py-0">{{ $contacts['office'] }}</p>
							@endif
						</div>

						@if( 
							isset($contacts['work_days']) && 
							!empty($contacts['work_days']) && 
							isset($contacts['work_time']) && 
							!empty($contacts['work_time'])
						)
							<div class="block md:hidden pb-8">
								<h5>Режим работы</h5>
							</div>
							<div class="pb-16 lg:pb-4 md:pb-8 text-xl lg:leading-10">
								<p class="py-0">{{ $contacts['work_days'] }}</p>
								<p class="py-0">{{ $contacts['work_time'] }}</p>
							</div>
						@endif
						<div class="block md:hidden pb-8">
							<h5>Социальные сети</h5>
						</div>
						<div class="flex justify-between pb-8 lg:text-xl lg:leading-10">
							<x-contacts.social />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 </main>
@endsection