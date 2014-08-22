<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlavoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flavours', function(Blueprint $table)
		{
			$table->increments('id')->index();

            $table->string('name');
            $table->string('description');

            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->string('thumbnail');
            $table->string('pic');

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
		Schema::table('flavours', function(Blueprint $table)
		{
            Schema::drop('flavours');
		});
	}

}
