<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCarousels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('carousels', function(Blueprint $table)
        {
            $table->string('img')->default('');
            $table->string('img-path')->default('');
        });

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('carousels', function(Blueprint $table)
        {
            $table->string('img');
            $table->string('img-path');
        });
	}

}
