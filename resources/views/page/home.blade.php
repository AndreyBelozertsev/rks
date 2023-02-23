@extends('layouts.app')

@section('content')

<main class="py-20 lg:py-20">
	<section>
		<div class="container">
			<div class="relative">
				<div>
					<img src="{{ asset('/template/images/hero-figure.png') }}">
				</div>
				<div class="hero__heading-block absolute w-full">
					<h1 class="text-center">ДРУГОЙ ВЗГЛЯД <br>НА МАРКЕТИНГ</h1>
				</div>
				<div class="hero__description-block w-full">
					<p class="text-xl">Ракурс — студия digital маркетинга.</p>
					<p class="text-xl">Наши клиенты зависят от успеха</p>
					<p class="text-xl">в интернете, и мы помогаем им его достичь</p>
				</div>
			</div>
			<div class="flex justify-end py-16">
				<button class="rounded-full w-128 h-128 ff-dela-gothic-one bg-accent text-brand text-xl">Оставить<br>заявку</button>
			</div>
			<div class="flex justify-center pb-8">
				<button class="pulse-button">
					<span class="pulse-button__icon"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
					<span class="pulse-button__rings"></span>
				</button>
			</div>
		</div>
	</section>
	<section class="about py-12 bg-brandWhite">
		<div class="container text-brand pb-20">
			<div>
				<h2 class="pb-8">О нас</h2>
			</div>
			<div>
				<p class="py-2">Руководствуясь концепцией, согласно которой нет единого шаблона для всех,Ракурс нашёл своё место в качестве динамично развивающейся и гибкой студии, которая охватывает несколько областей маркетинга, брендинг и разработки</p>
				<p class="py-2">За 5 лет мы выросли благодаря вовлеченности в проблемы клиентов и упорному труду</p>
				<p class="py-2">Мы называем точную цену услуг,поэтому никогда не выходим за рамки согласованного бюджета. А ещё наша команда ценит время партнёров, поэтому всегда соблюдает сроки</p>

			</div>
		</div>
		<div class="pb-8">
			<marquee class="py-4 ff-dela-gothic-one text-3xl text-brand" scrollamount="10"><span class="px-4">5+ лет опыта</span>•<span class="px-4">200+ компаний</span></marquee>
			<marquee class="py-4 ff-dela-gothic-one text-3xl text-brand" scrollamount="10"><span class="px-4">2000+ панорам</span>•<span class="px-4">Выручка клиентов в среднем +22%</span></marquee>
		</div>
	</section>
	<section class="about pb-20 bg-brandWhite">
		<div class="container text-brand">
			<div>
				<h2 class="pb-8">Услуги</h2>
			</div>
			<div class="pb-8">
				<p class="py-2">Независимо от того, управляете ли вы предприятием или небольшим стартапом, вы получите лучший в своём классе сервис, соответствующий вашим ожиданиям</p>
				<p class="py-2">Решаем задачи по продвижению любой сложности: от контекстной рекламы до создания приложений</p>
			</div>
			<div>
				<a class="text-brand text-l underline underline-offset-4 decoration-2 decoration-accent py-2" href="#">Узнать больше</a>
			</div>
		</div>
	</section>
	<section class="work pb-10 bg-brandWhite">
		<div class="container text-brand">
			<div>
				<h2 class="pb-8">Как мы работаем?</h2>
			</div>
			<div class="pb-8">
				<p class="py-2">Нам важно быть полезными клиенту, поэтому изначально мы согласовываем целевые показатели, проводим анализ компании, изучаем её представленность в интернете, сайт, целевую аудиторию</p>
				<p class="py-2">После аудита мы озвучиваем зоны потенциального роста и интересуемся бюджетом на рекламу. Понимание объёма вашего бюджета даёт нам возможность предложить оптимальные варианты для начала взаимовыгодного сотрудничества</p>
			</div>
		</div>
	</section>
	<section class="client pb-10 bg-brandWhite">
		<div class="container text-brand">
			<div>
				<h2 class="pb-8">Нам доверяют</h2>
			</div>
		</div>
		<x-our-clients />
		<div class="container text-brand">
			<div>
				<a href="#" class="bg-accent py-4 px-8 rounded-2xl block text-center text-l">Обсудить проект</a>
			</div>
		</div>
	</section>
 </main>
@endsection