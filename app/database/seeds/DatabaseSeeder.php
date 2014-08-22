<?php

class DatabaseSeeder extends Seeder {

    protected $tables = [
        'cities',
        'ramen',
        'udon',
        'sushi'
    ];

    protected $seeders = [
        'CitiesTableSeeder',
        'RamenTableSeeder',
        'UdonTableSeeder',
        'SushiTableSeeder'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }

    }

    /**
     * Clean out the database for a new seed generation.
     */
    private function cleanDatabase()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }

}