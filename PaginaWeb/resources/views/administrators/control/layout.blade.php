<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/fonts.css">
	<link rel="stylesheet" type="text/css" href=" {{ mix('css/app.css') }} ">
	<script type="text/javascript" src=" {{ mix('js/app.js') }} "></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<style type="text/css">
		.h-screen{
			height: 100vh;
		}
	</style>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('administrators.control.nav')
		</header>
		<main class="py-4">
			@yield('content')
		</main>
		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright @ 2020
		</footer>
	</div>

</body>
</html>