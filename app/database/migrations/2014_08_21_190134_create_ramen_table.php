<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ramen', function(Blueprint $table)
		{
			$table->increments('id')->index();

            $table->string('name');
            $table->string('name_jp');

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
		Schema::table('ramen', function(Blueprint $table)
		{
            Schema::drop('ramen');
		});
	}

}