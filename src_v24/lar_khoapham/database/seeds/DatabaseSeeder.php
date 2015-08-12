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

		$this->call('NewsTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {
	public function run()
	{
		DB::table('product')->insert([
			array('name'=>'Quần Đá Banh','price'=>null,'cate_id'=>2),
			array('name'=>'Quần Tennis','price'=>55000,'cate_id'=>2),
			array('name'=>'Quần Võ Thuật','price'=>null,'cate_id'=>2),
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