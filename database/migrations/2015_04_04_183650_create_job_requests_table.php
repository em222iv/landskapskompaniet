<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_requests', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('company');
            $table->text('request');
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
		Schema::drop('job_requests');
	}

}
