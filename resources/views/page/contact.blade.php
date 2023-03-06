@extends('layouts.app')
@section('content')
<main class="pt-28">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
			<div class="pb-12">
				<h1>Контакты</h1>
			</div>
			<div class="flex flex-row">
				<div class="hidden md:block w-full md:w-1/2 lg:w-2/3 md:pr-10">
					<x-contacts.map height="500px" />
				</div>
				<div class="w-full md:w-1/2 lg:w-1/3">
					<div class="pb-8">
						<div class="hidden md:block pb-8">
							<h3>Связаться с нами</h3>
						</div>
						<div class="pb-8 lg:pb-4 lg:text-xl lg:leading-10">
							<x-contacts.contact />
						</div>
						<div class="pb-16 md:pb-4 lg:text-xl lg:leading-10">
							<x-contacts.address />
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
							<div class="pb-16 lg:pb-4 md:pb-8 lg:text-xl lg:leading-10">
								<x-contacts.schedule />
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