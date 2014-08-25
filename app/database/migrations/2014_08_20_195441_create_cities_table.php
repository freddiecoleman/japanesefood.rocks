<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('cities', function(Blueprint $table)
        {
            $table->increments('id')->index();

            $table->string('name');
            $table->string('name_jp');

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
        Schema::table('cities', function(Blueprint $table)
        {
            Schema::drop('cities');
        });
	}

}
