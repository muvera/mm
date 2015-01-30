<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateYoutubesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('youtubes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('audio');
			$table->text('video');
			$table->text('lyrics');
			$table->text('karaoke');
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
		Schema::drop('youtubes');
	}

}
