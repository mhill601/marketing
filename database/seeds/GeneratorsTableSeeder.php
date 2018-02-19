<?php

use Illuminate\Database\Seeder;

class GeneratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('generators')->insert([
			'id' => 1,
			'type' => 'selection',
		]);
		DB::table('generators')->insert([
			'id' => 2,
			'type' => 'selection'
		]);
    }
}
