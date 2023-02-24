	<!-- Site footer -->
	<footer class="bg-brand pt-20 pb-8">
		<div class="container">
			<div class="hidden lg:flex gap-24 pb-8">
				<div>
					<div class="flex gap-14 pb-16">
						<div>
							<p><a href="#">+7 978 1107283</a></p>
							<p><a href="#">+7 978 1107289</a></p>
							<p><a href="#">info.rakurs@bk.ru</a></p>
						</div>
						<div>
							<p>г. Симферополь</p>
							<p>ул. Маяковского 14л</p>
							<p>офис 311</p>
						</div>
					</div>
					<div class="flex justify-between">
						<a href="#"><img src="{{ asset('template/icon/vk.svg') }}" alt="vk"></a>
						<a href="#"><img src="{{ asset('template/icon/tg.svg') }}" alt="telegram"></a>
						<a href="#"><img src="{{ asset('template/icon/whatsapp.svg') }}" alt="whatsapp"></a>
						<a href="#"><img src="{{ asset('template/icon/youtube.svg') }}" alt="youtube"></a>
					</div>
				</div>
				<div class="w-1/2 h-[210px]">
					<div id="map" class="h-[210px]"></div>
				</div>
			</div>
			<div class="flex flex-col lg:flex-row items-center lg:justify-between gap-4">
				<a class="lg:hidden" href="{{ route('home') }}" rel="home">
					<img src="{{ asset('template/images/logo.svg') }}" alt="{{ env('APP_NAME') }}">
				</a>
				<p>{{ env('APP_NAME') }}, 2023 © РАКУРС</p>
				<a>Конфиденциальность</a>
				<a class="lg:hidden">Контакты</a>
			</div>
		</div>
	</footer>
	<script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>
	@vite(['resources/js/app.js'])
</body>
</html>