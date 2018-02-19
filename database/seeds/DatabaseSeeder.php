<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScrapersTableSeeder::class);
		$this->call(IncrementFragmentsTableSeeder::class);
		$this->call(StaticFragmentsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(SelectionTableSeeder::class);
		$this->call(RegexTableSeeder::class);
		$this->call(GeneratorsTableSeeder::class);
    }
}
