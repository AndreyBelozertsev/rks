	<!-- Site footer -->
	<footer class="bg-brand py-8">
		<div class="container">
			<div class="hidden lg:flex gap-24 pb-8">
				<div>
					<div class="flex gap-14 pb-16">
						<div>
							<x-contacts.contact />
						</div>
						<div>
							<x-contacts.address />
						</div>
					</div>
					<div class="flex justify-between">
						<x-contacts.social />
					</div>
				</div>
				<div class="w-1/2 h-[210px]">
					<x-contacts.map />
				</div>
			</div>
			<div class="flex flex-col lg:flex-row items-center lg:justify-between gap-4">
				<a class="lg:hidden" href="{{ route('home') }}" rel="home">
					<img src="{{ asset('template/images/logo.svg') }}" alt="{{ env('APP_NAME') }}">
				</a>
				<p class="uppercase pb-0">{{ date('Y') }} © {{ isset($contacts['organization']) ? $contacts['organization'] :  env('APP_NAME') }}</p>
				<div class="flex flex-col">
					<a href="{{ route('vacancy.index') }}" class="gap-2">Вакансии</a>
					<a href="{{ route('policy.index') }}" class="gap-2">Конфиденциальность</a>
				</div>

				<a class="lg:hidden -mt-2">Контакты</a>
			</div>
		</div>
	</footer>
	@include('modals.response')
	@include('modals.analitic')
	@include('modals.cookie')
	<script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
	@vite(['resources/js/app.js'])
</body>
</html>