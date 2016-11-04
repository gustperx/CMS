<!DOCTYPE html>
	<html lang="en" class="coming-soon">
	<head>
		@include('templates.admin.head')
		@include('templates.admin.css.css')
		@yield('head')
	</head>
	<body class="focused-form">
		<div class="container" id="login-form">
			<a href="#" class="login-logo">
				<img src="{{Config::get()->logo}}" width="200">
			</a>
			@yield('content')
		</div>
		@include('templates.admin.js.js')
		@yield('footer')		
	</body>
</html>