	<!-- Site footer -->
	<footer class="bg-brand pb-8">
		<div class="container">
			<div class="flex flex-col items-center gap-4">
				<a href="{{ route('home') }}" rel="home">
					<img src="{{ asset('template/images/logo.svg') }}" alt="{{ env('APP_NAME') }}">
				</a>
				<p>{{ env('APP_NAME') }}, 2023 © РАКУРС</p>
				<a>Конфиденциальность</a>
				<a>Контакты</a>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	@vite(['resources/js/app.js'])
</body>
</html>