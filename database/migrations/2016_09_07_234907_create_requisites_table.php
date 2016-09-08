<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requisites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('firstname');
			$table->string('lastname');
			$table->string('bank_name');
			$table->string('card_number');
			$table->string('region');
			$table->string('bill_number');
			$table->string('bank_branch_number');
			$table->string('bank_address');
			$table->string('inn');
			$table->string('kpp');
			$table->string('bik');
			$table->string('checking_bill');
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
		Schema::drop('requisites');
	}

}
