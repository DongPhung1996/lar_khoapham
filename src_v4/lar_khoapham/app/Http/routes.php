<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('hoclaravel',function () {
	echo "Chào mừng bạn đến với khóa học lập trình Laravel tại Khoa Phạm";
});

Route::get('thongtin','WelcomeController@showinfo');

Route::get('khoa-hoc',function() {
	return "Lập Trình Laravel 5 Tại Khoa Phạm";
});
Route::get('khoa-hoc/lap-trinh-php',function () {
	return "Khóa Học Lập Trình PHP";
});
Route::get('lap-trinh/{monhoc}/{thoigian}',function ($monhoc,$thoigian) {
	return "Khóa học lập trình : $monhoc lúc $thoigian";
});
Route::get('mon-an/{tenmonan?}',function ($tenmonan = "KFC") {
	return $tenmonan;
});
Route::get('thong-tin/{hoten}/{sodienthoai}',function ($hoten,$sodienthoai) {
	return "Thông tin của bạn là : $hoten có số điện thoại là $sodienthoai";
})->where(['hoten'=>'[a-zA-Z]+','sodienthoai'=>'[0-9]{1,10}']);