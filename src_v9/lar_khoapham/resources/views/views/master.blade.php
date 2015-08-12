<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Khoa Pham - @yield('title')</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		#wrapper {width: 980px;height: auto;margin: 0px auto}
		#header {width: auto;height: 200px;background: red}
		#content {width: auto;height: 500px;background: blue}
		#footer {width: auto;height: 100px;background: green}
	</style>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			@section('sidebar')
				Đây là Menu

			@show
		</div>
		<div>

		</div>
		<div id="content">
			@yield('noidung')
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>