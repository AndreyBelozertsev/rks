<head>
	<meta charset="utf-8">
	
	<title>{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}</title>
	<meta name="description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<meta property="og:title" content="{{ isset($seo_information->title) ? $seo_information->title : env('APP_NAME') }}"/>
	<meta property="og:image" content="{{ isset($seo_information->open_graph) ? $seo_information->open_graph : '' }}"/>
	<meta property="og:description" content="{{ isset($seo_information->description) ? $seo_information->description : '' }}"/>

	<link rel="icon" href="/template/favicon/favicon.ico" type="image/x-icon">
  	<link rel="shortcut icon" href="/template/favicon/favicon.ico" type="image/x-icon">

	<link rel="mask-icon" href="./images/safari-pinned-tab.svg" color="#1E1F43">
	<meta name="msapplication-TileColor" content="#1E1F43">
	<meta name="theme-color" content="#1E1F43">

    @vite(['resources/css/app.css', 'resources/css/scss/main.scss'])
	
</head>