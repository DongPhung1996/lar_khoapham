<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoaPhamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kpt_khoapham', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('monhoc');
			$table->integer('giatien');
			$table->string('giangvien');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kpt_khoapham');
	}

}
