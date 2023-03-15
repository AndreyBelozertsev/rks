@extends('layouts.app')

@section('content')
<main class="py-20">
	<section class="lg:h-screen">
		<div class="container">
			<div class="hidden lg:flex justify-center pt-20 pb-40">
				<svg width="80" height="300" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2500">
					<text x="28" y="150" fill="#F0F0F0" transform="rotate(-90, 28, 150)" style="text-anchor:middle;font-size:16px;">Другой взгляд на маркетинг</text>
				</svg>
				<div class="ff-dela-gothic-one">
					<div class="pb-12">
						<h1 data-aos="fade-in" data-aos-easing="linear" data-aos-duration="2000" class="uppercase text-onAccent text-9xl">Ракурс</h1>
					</div>
					<div data-aos="fade-in" data-aos-easing="linear" data-aos-duration="3000" class="text-4xl">
						<p class="uppercase">#digital</p>
						<p class="uppercase">#marketing</p>
					</div>
				</div>
				<div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="3000" class="flex items-end">
					<a href="{{ route('form.show') }}"><button class="animation-pulse rounded-full w-128 h-128 ff-dela-gothic-one bg-onAccent text-brand text-lg">Оставить<br>заявку</button></a>
				</div>
			</div>
			<div class="relative block lg:hidden">
				<div>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" height="300px" id="blobSvg" transform="rotate(0)" style="opacity: 1;">
						<defs>
							<linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
								<stop offset="0%" style="stop-color: rgb(156, 115, 247);"></stop>
								<stop offset="100%" style="stop-color: rgb(156, 115, 247);"></stop>
							</linearGradient>
						</defs>
						<path id="blob" fill="url(#gradient)" style="opacity: 1;">
							<animate attributeName="d" dur="17.8s" repeatCount="indefinite" values="M418.08664,320.33435Q390.6687,390.6687,320.33435,427.91946Q250,465.17023,188.27506,419.31005Q126.55013,373.44987,106.38448,311.72494Q86.21883,250,84.09726,165.98785Q81.9757,81.9757,165.98785,53.98938Q250,26.00305,311.1687,76.83282Q372.3374,127.6626,408.92099,188.8313Q445.50458,250,418.08664,320.33435Z;M395.5,320Q390,390,320,400Q250,410,172,408Q94,406,59,328Q24,250,70.5,183.5Q117,117,183.5,108Q250,99,335,89.5Q420,80,410.5,165Q401,250,395.5,320Z;M408.24461,332.63257Q415.26513,415.26513,332.63257,434.71568Q250,454.16622,179.33614,422.74697Q108.67228,391.32772,65.87585,320.66386Q23.07942,250,63.27221,176.73251Q103.46501,103.46501,176.73251,63.02288Q250,22.58075,311.86507,74.4253Q373.73015,126.26985,387.47712,188.13493Q401.22409,250,408.24461,332.63257Z;M409.06419,322.5266Q395.0532,395.0532,322.5266,445.11739Q250,495.18159,163.51944,459.07135Q77.03888,422.96112,82.39949,336.48056Q87.7601,250,115.64271,196.76266Q143.52532,143.52532,196.76266,76.83657Q250,10.14783,323.24578,56.82813Q396.49156,103.50844,409.78338,176.75422Q423.07519,250,409.06419,322.5266Z;M405.0078,325.44624Q400.89248,400.89248,325.44624,434.97549Q250,469.0585,165.42535,444.1039Q80.8507,419.1493,84.75627,334.57465Q88.66184,250,94.44262,175.1117Q100.2234,100.2234,175.1117,82.29749Q250,64.37159,306.73538,100.45042Q363.47075,136.52925,386.29693,193.26462Q409.12312,250,405.0078,325.44624Z;M418.08664,320.33435Q390.6687,390.6687,320.33435,427.91946Q250,465.17023,188.27506,419.31005Q126.55013,373.44987,106.38448,311.72494Q86.21883,250,84.09726,165.98785Q81.9757,81.9757,165.98785,53.98938Q250,26.00305,311.1687,76.83282Q372.3374,127.6626,408.92099,188.8313Q445.50458,250,418.08664,320.33435Z"></animate>
						</path>
					</svg>
				</div>
				<div class="hero__heading-block absolute w-full">
					<h1 class="text-center">ДРУГОЙ ВЗГЛЯД <br>НА МАРКЕТИНГ</h1>
				</div>
				<div class="hero__description-block w-full pb-12">
					<p class="text-lg">Ракурс — студия digital маркетинга.</p>
					<p class="text-lg">Наши клиенты зависят от успеха</p>
					<p class="text-lg">в интернете, и мы помогаем им его достичь</p>
				</div>
			</div>
			<div class="flex lg:hidden justify-end pt-18">
				<a href="{{ route('form.show') }}"><button class="rounded-full w-128 h-128 ff-dela-gothic-one bg-accent text-brand text-lg">Оставить<br>заявку</button></a>
			</div>
			<x-pulse-button class="pb-8 pt-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000" />
		</div>
	</section>
	<section class="about py-12" id="anchor" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container lg:grid grid-cols-2 pb-20 gap-32">
			<x-subtitle-home title="О нас" number="01" />
			<div>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">Руководствуясь концепцией, согласно которой нет единого шаблона для всех, Ракурс нашёл своё место в качестве динамично развивающейся и гибкой студии, которая охватывает несколько областей маркетинга, брендинг и разработки</p>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">За 5 лет мы выросли благодаря вовлеченности в проблемы клиентов и упорному труду</p>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">Мы называем точную цену услуг и не выходим за рамки согласованного бюджета. Наша команда ценит время партнёров, поэтому всегда соблюдает сроки</p>
			</div>
		</div>
	</section>
	<section class="services pb-12 lg:mb-40" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container hidden lg:grid grid-cols-2 gap-32">
			<div>
				<p class="text-4xl">Ракурс в цифрах</p>
			</div>	
			<div class="lg:grid grid-cols-2">
				<div>
					<p class="text-6xl stroke-panel">+5</p>
					<span class="text-l text-onAccent">лет опыта</span>
				</div>
				<div>
					<p class="text-6xl stroke-panel">+2000</p>
					<span class="text-l text-onAccent ">опубликованных панорам</span>
				</div>
				<div>
					<p class="text-6xl stroke-panel">+200</p>
					<span class="text-l text-onAccent ">компаний</span>
				</div>
				<div>
					<p class="text-6xl stroke-panel">+22%</p>
					<span class="text-l text-onAccent ">прирост выручки клиента</span>
				</div>
			</div>

		</div>
		<div class="block lg:hidden pb-8">
			<marquee class="py-4 ff-dela-gothic-one text-2xl" scrollamount="10"><span class="px-4">5+ лет опыта</span>•<span class="px-4">200+ компаний</span></marquee>
			<marquee class="py-4 ff-dela-gothic-one text-2xl" scrollamount="10"><span class="px-4">2000+ панорам</span>•<span class="px-4">Выручка клиентов в среднем +22%</span></marquee>
		</div>
		<div class="container">
			<div class="lg:grid grid-cols-2 gap-32">
				<div>
					<x-subtitle-home class="pb-7" title="Услуги" number="02" />
					<div class="pb-8">
						<p>Независимо от того, управляете ли вы крупным предприятием или небольшим стартапом, вы получите лучший в своём классе сервис, соответствующий вашим ожиданиям</p>
						<p>Решаем задачи любой сложности: от разработки дизайна и настройки контекстной рекламы до создания корпоративных CRM систем и приложений</p>
					</div>
				</div>
				<div>
					<div class="hidden lg:flex flex-col pt-10 pb-20">
						@forelse ($serviceCategories as $category)
							<div class="flex">
								<a href="{{ route('service-category.show', $category->slug) }}" 
								class="uppercase text-5xl ff-dela-gothic-one border-solid divide-wildSand border-t-2 leading-loose @if($loop->last) border-b-2 @endif">{{ $category->title }}</a>
							</div>
						@empty
						@endforelse
					</div>
					<div>
						<a class="text-base underline underline-offset-4 decoration-2 decoration-accent py-2" href="{{ route('service-category.index') }}">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="work pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container">
			<div class="lg:grid grid-cols-2 gap-32">
				<x-subtitle-home class="pb-7" title="Как мы<br>работаем?" number="03" />
				<div class="pb-8">
					<p class="lg:text-2xl lg:leading-10 lg:pb-10">Нам важно быть полезными клиенту, поэтому изначально мы проводим комплексный анализ компании, изучаем текущую представленность в интернете, определяем портрет клиента и основных конкурентов, согласовываем целевые показатели</p>
					<p class="lg:text-2xl lg:leading-10 lg:pb-10">После аудита мы находим зоны потенциального роста и интересуемся бюджетом на рекламу. Понимание объёма бюджета даёт нам возможность разработать оптимальную маркетинговую стратегию</p>
				</div>
			</div>
		</div>
	</section>
	<section class="client pb-12" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
		<div class="container ">
			<x-subtitle-home class="pb-7" title="Нам<br>доверяют" number="04" />
		</div>
		<x-our-clients />
		<div class="container">
			<x-pre-footer-action 
				text="Хотите сделать ваш бизнес более успешным и узнаваемым? Напишите, и мы вам поможем!"
			/>
		</div>
	</section>
</main>
@endsection