<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSushiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sushi', function(Blueprint $table)
		{
            $table->increments('id')->index();

            $table->string('name');
            $table->string('description');

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
		Schema::table('sushi', function(Blueprint $table)
		{
            Schema::drop('sushi');
		});
	}

}
