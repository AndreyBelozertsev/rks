@extends('layouts.app')
@section('content')
<main class="pt-28">
	<section class="pb-12" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="1000">
		<div class="container">
			<div class="pb-12">
				<h1>Отзывы</h1>
			</div>
            <div class="grid lg:grid-cols-2 lg:gap-32">
                <div class="pb-8 lg:text-2xl lg:leading-10 content">
                    <p>Мы вкладываем огромное значение в качество нашего сервиса.</p>
                    <p>Отзывы клиентов помогают нам понять, что мы делаем правильно, а также выявить возможности для улучшения и роста качества обслуживания.</p>
                    <p>Спасибо, что выбрали нас. Мы ценим Ваше доверие и всегда остаемся на связи!</p>
                    <br>
                    <p>С уважением, команда компании Ракурс</p>

                </div>
                <div>
                    <div style="width:100%;height:800px;overflow:hidden;position:relative;"><iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box" src="https://yandex.ru/maps-reviews-widget/42461114850?comments" title="maps"></iframe><a href="https://yandex.ru/maps/org/rakurs/42461114850/" target="_blank" style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Ракурс на карте Симферополя — Яндекс Карты</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection