<head>
	<meta charset="utf-8">
	
	<title>{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}</title>
	<meta name="description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	@if(request()->query())
		<link rel="canonical" href="{{ url()->current() }}"/>
	@endisset

	<meta property="og:title" content="{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}"/>
	<meta property="og:image" content="{{ isset($seo_information->open_graph) ? $seo_information->open_graph : '' }}"/>
	<meta property="og:description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}"/>

	<link rel="icon" href="/template/favicon/favicon.ico" type="image/x-icon">
  	<link rel="shortcut icon" href="/template/favicon/favicon.ico" type="image/x-icon">

	<link rel="mask-icon" href="./images/safari-pinned-tab.svg" color="#1E1F43">
	<meta name="msapplication-TileColor" content="#1E1F43">
	<meta name="theme-color" content="#1E1F43">
	<meta name="yandex-verification" content="6e494df6f8b03c48" />
	<!-- Yandex.Metrika counter --> 
	<script type="text/javascript">(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(48507413, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> 
	<!-- /Yandex.Metrika counter -->
    @vite(['resources/css/app.css', 'resources/css/scss/main.scss'])
</head>