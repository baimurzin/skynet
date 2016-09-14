<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('money_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_made')->unsigned();
			$table->integer('user_got_money')->unsigned();
			$table->decimal('percent');
			$table->decimal('money_got');//получил сколько
			$table->decimal('sum'); //общая сумма взноса
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
		Schema::drop('money_logs');
	}

}
