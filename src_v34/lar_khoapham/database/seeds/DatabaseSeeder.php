<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		$this->call('CarColorTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {
	public function run()
	{
		DB::table('product')->insert([
			array('name'=>'Quần Đá Banh','price'=>60000,'cate_id'=>2),
			array('name'=>'Quần Tennis','price'=>55000,'cate_id'=>2),
			array('name'=>'Quần Võ Thuật','price'=>2000,'cate_id'=>2),
			array('name'=>'Quần Đá Banh','price'=>60000,'cate_id'=>2),
			array('name'=>'Quần Tennis','price'=>55000,'cate_id'=>2),
			array('name'=>'Quần Võ Thuật','price'=>2000,'cate_id'=>2),
			array('name'=>'Quần Đá Banh','price'=>60000,'cate_id'=>2),
			array('name'=>'Quần Tennis','price'=>55000,'cate_id'=>2),
			array('name'=>'Quần Võ Thuật','price'=>2000,'cate_id'=>2),
			array('name'=>'Quần Cầu Lông','price'=>60000,'cate_id'=>2)
		]);
	}

}
class CateNewsTableSeeder extends Seeder {
	public function run () {
		DB::table('cate_news')->insert([
			['name'=>'Thế Giới'],
			['name'=>'Thể Thao'],
			['name'=>'Âm Nhạc']
		]);
	}
}
class NewsTableSeeder extends Seeder {
	public function run () {
		DB::table('news')->insert([
			['title'=>'Đây Là Tiêu Đề 1','intro'=>'Đây là Intro 1','cate_id'=>1],
			['title'=>'Đây Là Tiêu Đề 2','intro'=>'Đây là Intro 2','cate_id'=>1],
			['title'=>'Đây Là Tiêu Đề 3','intro'=>'Đây là Intro 3','cate_id'=>1],
			['title'=>'Đây Là Tiêu Đề 4','intro'=>'Đây là Intro 4','cate_id'=>1],
		]);
	}
}

class ImagesTableSeeder extends Seeder {
	public function run () {
		DB::table('images')->insert([
			['name'=>'hinh_quantennis_1.png','product_id'=>20],
			['name'=>'hinh_quantennis_2.png','product_id'=>20],
			['name'=>'hinh_quantennis_3.png','product_id'=>20],
			['name'=>'hinh_quantennis_4.png','product_id'=>20],
			['name'=>'hinh_quandibien_1.png','product_id'=>27],
			['name'=>'hinh_quandibien_2.png','product_id'=>27],
			['name'=>'hinh_quandibien_3.png','product_id'=>27],
			['name'=>'hinh_quandibien_4.png','product_id'=>27],
		]);
	}
}
class CarTableSeeder extends Seeder {
	public function run () {
		DB::table('cars')->insert([
			['name'=>'BMW','price'=>5000000000],
			['name'=>'Audi','price'=>4200000000],
			['name'=>'Honda','price'=>3300000000],
			['name'=>'Suzuki','price'=>1000000000],
			['name'=>'Porsche','price'=>7000000000],
			['name'=>'Huyndai','price'=>2500000000]
		]);
	}
}
class ColorTableSeeder extends Seeder {
	public function run () {
		DB::table('colors')->insert([
			['name'=>'red'],
			['name'=>'blue'],
			['name'=>'black'],
			['name'=>'white'],
		]);
	}
}
class CarColorTableSeeder extends Seeder {
	public function run () {
		DB::table('car_colors')->insert([
			['car_id'=>1,'color_id'=>1],
			['car_id'=>2,'color_id'=>1],
			['car_id'=>3,'color_id'=>1],
			['car_id'=>4,'color_id'=>2],
			['car_id'=>4,'color_id'=>3],
			['car_id'=>4,'color_id'=>4],
			['car_id'=>5,'color_id'=>1],
		]);
	}
}