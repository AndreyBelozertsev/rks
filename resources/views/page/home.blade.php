@extends('layouts.app')

@section('content')
	<section class="lg:h-screen">
		<div class="container">
			<div class="hidden lg:flex justify-center pt-20 pb-40">
				<svg width="80" height="300">
					<text x="28" y="150" fill="#F0F0F0" transform="rotate(-90, 28, 150)" style="text-anchor:middle;font-size:16px;">Другой взгляд на маркетинг</text>
				</svg>
				<div class="ff-dela-gothic-one">
					<div class="pb-12">
						<h1 class="uppercase text-onAccent text-9xl">Ракурс</h1>
					</div>
					<div class="text-4xl">
						<p class="uppercase">#digital</p>
						<p class="uppercase">#marketing</p>
					</div>
				</div>
				<div class="flex items-end">
					<a href="{{ route('form.show') }}"><button class="animation-pulse rounded-full w-128 h-128 ff-dela-gothic-one bg-onAccent text-brand text-lg">Оставить<br>заявку</button></a>
				</div>
			</div>
			<div class="relative block lg:hidden">
				<div>
					<img src="{{ asset('/template/images/hero-figure.png') }}">
				</div>
				<div class="hero__heading-block absolute w-full">
					<h1 class="text-center">ДРУГОЙ ВЗГЛЯД <br>НА МАРКЕТИНГ</h1>
				</div>
				<div class="hero__description-block w-full">
					<p class="text-lg">Ракурс — студия digital маркетинга.</p>
					<p class="text-lg">Наши клиенты зависят от успеха</p>
					<p class="text-lg">в интернете, и мы помогаем им его достичь</p>
				</div>
			</div>
			<div class="flex lg:hidden justify-end py-16">
				<a href="{{ route('form.show') }}"><button class="rounded-full w-128 h-128 ff-dela-gothic-one bg-accent text-brand text-lg">Оставить<br>заявку</button></a>
			</div>
			<div class="flex justify-center pb-8">
				<button class="pulse-button" id="pulse-button">
					<span class="pulse-button__icon"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
				</button>
			</div>
		</div>
	</section>
	<section class="about py-12" id="anchor">
		<div class="container lg:grid grid-cols-2 pb-20 gap-32">
			<x-subtitle-home title="О нас" number="01" />
			<div>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">Руководствуясь концепцией, согласно которой нет единого шаблона для всех,Ракурс нашёл своё место в качестве динамично развивающейся и гибкой студии, которая охватывает несколько областей маркетинга, брендинг и разработки</p>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">За 5 лет мы выросли благодаря вовлеченности в проблемы клиентов и упорному труду</p>
				<p class="lg:text-2xl lg:leading-10 lg:pb-10">Мы называем точную цену услуг,поэтому никогда не выходим за рамки согласованного бюджета. А ещё наша команда ценит время партнёров, поэтому всегда соблюдает сроки</p>
			</div>
		</div>
	</section>
	<section class="services pb-20 lg:mb-40">
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
						<p>Независимо от того, управляете ли вы предприятием или небольшим стартапом, вы получите лучший в своём классе сервис, соответствующий вашим ожиданиям</p>
						<p>Решаем задачи по продвижению любой сложности: от контекстной рекламы до создания приложений</p>
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
	<section class="work pb-10">
		<div class="container">
			<div class="lg:grid grid-cols-2 gap-32">
				<x-subtitle-home class="pb-7" title="Как мы<br>работаем?" number="03" />
				<div class="pb-8">
					<p class="lg:text-2xl lg:leading-10 lg:pb-10">Нам важно быть полезными клиенту, поэтому изначально мы согласовываем целевые показатели, проводим анализ компании, изучаем её представленность в интернете, сайт, целевую аудиторию</p>
					<p class="lg:text-2xl lg:leading-10 lg:pb-10">После аудита мы озвучиваем зоны потенциального роста и интересуемся бюджетом на рекламу. Понимание объёма вашего бюджета даёт нам возможность предложить оптимальные варианты для начала взаимовыгодного сотрудничества</p>
				</div>
			</div>
		</div>
	</section>
	<section class="client pb-10">
		<div class="container ">
			<x-subtitle-home class="pb-7" title="Нам<br>доверяют" number="04" />
		</div>
		<x-our-clients />
		<div class="container">
			<div class="lg:grid grid-cols-2 pb-20 gap-32">
				<div class="hidden lg:block">
					<p class="lg:text-2xl lg:leading-10 lg:pb-10">Готовы запустить проект по продвижению? Мы поможем вам в этом. Давайте сделаем ваш бизнес успешным</p>
				</div>
				<div>
					<a href="{{ route('form.show') }}" class="bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center text-base lg:text-xl">Обсудить проект</a>
				</div>
			</div>
		</div>
	</section>
@endsection