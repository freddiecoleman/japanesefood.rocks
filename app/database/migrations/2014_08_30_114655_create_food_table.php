<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food', function(Blueprint $table)
		{
            $table->increments('id')->index();

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
		Schema::drop('food');
	}

}
