<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('text');
            $table->string('img');
            $table->timestamps();
        });
        Schema::create('service_sub_service', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index()->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('Cascade')->onUpdate('cascade');
            $table->integer('sub_service_id')->unsigned()->index()->nullable();
            $table->foreign('sub_service_id')->references('id')->on('sub_services')->onDelete('Cascade')->onUpdate('cascade');
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
        Schema::drop('service_sub_service');
        Schema::drop('sub_services');
    }

}
