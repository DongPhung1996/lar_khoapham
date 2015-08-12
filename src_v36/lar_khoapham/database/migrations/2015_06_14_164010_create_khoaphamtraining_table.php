<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoaphamtrainingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('khoaphamtraining', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ten');
			$table->string('email');
			$table->string('sodienthoai');
			$table->string('diachi');
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
		Schema::drop('khoaphamtraining');
	}

}
