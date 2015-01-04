<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRememberTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$connection = Config::get('user::connection');
		$table_name = Config::get('wordpress-auth-laravel::database.remember_token_table');

		Schema::connection($connection)->create($table_name, function($table)
		{
			$table->bigIncrements('user_ID');
			$table->rememberToken();
			$table->foreign('user_ID')->references('ID')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$connection = Config::get('user::connection');
		$table_name = Config::get('wordpress-auth-laravel::database.remember_token_table');

		Schema::connection($connection)->drop($table_name);
	}

}
