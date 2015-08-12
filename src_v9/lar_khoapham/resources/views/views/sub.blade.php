@extends('views.master')
@section('title','Sub Template')
@section('sidebar')
	Nằm Phía Dưới
	@parent

@stop
@section('noidung')
Đây là trang sub
<br />
<?php $hoten = "<b>Khoa Pham Training</b>"; ?>
{{ $hoten }}
<br />
{!! $hoten !!}

<br />
<?php $diem = 10; ?>
@if ($diem <= 5)
	Học Sinh Yếu
@elseif ($diem >= 5 && $diem <= 7)
	Học Sinh Trung Bình
@else
	Học Sinh Giỏi
@endif

{{ isset($diemm) ? $diemm : 'Không tồn tại biến điểm'  }}

<hr />

{{ $diemm or 'Không tồn tại biến điểm' }}
@stop