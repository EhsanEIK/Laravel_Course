<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','This is default page')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<h1>This is Menu bar</h1>

	<div class="container">
		@yield('content')
	</div>

	<footer>
		<p>&copy; {{date('Y')}} | This is footer</p>
	</footer>
</body>
</html>