<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('status');
			$table->string('store_id');
			$table->string('verify');
			$table->text('products');
			$table->string('b_address1');
			$table->string('b_address2');
			$table->string('b_city');
			$table->string('b_state');
			$table->string('b_zip');
			$table->string('b_country');
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
		Schema::drop('orders');
	}

}
