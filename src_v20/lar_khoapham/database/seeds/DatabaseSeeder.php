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

		$this->call('ProductTableSeeder');
	}

}

class ProductTableSeeder extends Seeder {
	public function run()
	{
		DB::table('product')->insert([
			array('name'=>'Quần Đá Banh','price'=>50000,'cate_id'=>2),
			array('name'=>'Quần Tennis','price'=>55000,'cate_id'=>2),
			array('name'=>'Quần Võ Thuật','price'=>52000,'cate_id'=>2),
			array('name'=>'Quần Cầu Lông','price'=>60000,'cate_id'=>2)
		]);
	}

}
