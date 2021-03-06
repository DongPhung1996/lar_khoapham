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
Route::get('call-view',function () {
	$hoten = "Tuấn Đẹp Zai";
	$view = "Admin";
	return view('view',compact('hoten','view'));
});
Route::get('test-controller','WelcomeController@testAction');
Route::get('ho-chi-minh',['as'=>'hcm',function () {
	return "Hồ Chí Minh Đẹp Lắm Bạn Ơi";
}]);

Route::group(['prefix'=>'thuc-don'],function () {
	Route::get('bun-bo',function () {
		echo "Đây là trang bán bún bò";
	});
	Route::get('bun-mam',function () {
		echo "Đây là trang bán bún mắm";
	});
	Route::get('bun-moc',function () {
		echo "Đây là trang bán bún mộc";
	});
});

Route::get('goi-view',function () {
	return view('layout.sub.view');
});
Route::get('goi-layout',function () {
	return view('layout.sub.layout');
});
View::share('title','Lập Trình Laravel 5x');
View::composer(['layout.sub.layout','layout.sub.view'],function ($view) {
	return $view->with('thongtin','Đây Là Trang Cá Nhân');
});
Route::get('check-view',function () {
	if (view()->exists('app')) {
		return "Tồn Tại View";
	} else {
		return "Không Tồn Tại View";
	}
});
Route::get('goi-master',function () {
	return view('views.layout');
});
Route::get('url/full',function() {
	return URL::full();
});
Route::get('url/asset',function() {
	//return URL::asset('css/mystyle.css');
	return asset('css/mystyle.css',true);
});
Route::get('url/to',function () {
	return URL::to('thong-tin',['quoctuan','0123456789'],true);
});
Route::get('url/secure',function () {
	return secure_url('thong-tin',['quoctuan','0123456789']);
});
Route::get('schema/create',function () {
	Schema::create('khoapham',function ($table) {
		$table->increments('id');
		$table->string('tenmonhoc');
		$table->integer('gia');
		$table->text('ghichu')->nullable();
		$table->timestamps();
	});
});
Route::get('schema/rename',function () {
	Schema::rename('khoapham','kpt');
});
Route::get('schema/drop',function () {
	Schema::drop('product');
});
Route::get('schema/drop-exists',function () {
	Schema::dropIfExists('khoapham');
});
Route::get('schema/chang-col-attr',function () {
	Schema::table('khoapham',function ($table) {
		$table->string('tenmonhoc',50)->change();
	});
});
Route::get('schema/drop-col',function () {
	Schema::table('khoapham',function ($table) {
		$table->dropColumn(['tenmonhoc','gia']);
	});
});
Route::get('schema/create/cate',function () {
	Schema::create('cate_news',function ($table) {
		$table->increments('id');
		$table->string('name');
		$table->timestamps();
	});
});
Route::get('schema/create/news',function () {
	Schema::create('news',function ($table) {
		$table->increments('id');
		$table->string('title');
		$table->integer('intro');
		$table->integer('cate_id')->unsigned();
		$table->timestamps();
	});
});
Route::get('query/select-all',function () {
	$data = DB::table('product')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/select-column',function () {
	$data = DB::table('product')->select('name')->where('id',4)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where-or',function () {
	$data = DB::table('product')->where('cate_id',2)->orWhere('price',50000)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where',function () {
	$data = DB::table('product')->where('cate_id',2)->where('price',50000)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/order',function () {
	$data = DB::table('product')->select('name')->where('price','>',50000)->orderBy('price','DESC')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/limit',function () {
	$data = DB::table('product')->skip(2)->take(2)->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/between',function () {
	$data = DB::table('product')->whereBetween('id',[2,4])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/not-between',function () {
	$data = DB::table('product')->whereNotBetween('id',[2,4])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where-in',function () {
	$data = DB::table('product')->whereIn('id',[1,5,6])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/where-not-in',function () {
	$data = DB::table('product')->whereNotIn('id',[1,5,6])->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});
Route::get('query/count',function () {
	$data = DB::table('product')->count();
	echo $data;
});
Route::get('query/max',function () {
	$data = DB::table('product')->min('price');
	echo $data;
});
Route::get('query/avg',function () {
	$data = DB::table('product')->avg('id');
	echo $data;
});
Route::get('query/sum',function () {
	$data = DB::table('product')->sum('id');
	echo $data;
});
Route::get('query/join',function () {
	$data = DB::table('news')->select('title','name')->join('cate_news','news.cate_id','=','cate_news.id')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});