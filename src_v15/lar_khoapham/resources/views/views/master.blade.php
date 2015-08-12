<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Khoa Pham - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('public/template/css/mystyle.css') }}">
</head>
<body>
	<div id="wrapper">
		@include('views.marquee',['mar_content'=>'Khóa Học Lập Trình Laravel'])
		{{--<div id="header">
			@section('sidebar')
				Đây là Menu

			@show
		</div>--}}
		<div>

		</div>
		<div id="content">
			@yield('noidung')
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>