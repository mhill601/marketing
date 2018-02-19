<?php

use Illuminate\Database\Seeder;

class IncrementFragmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('incrementfragments')->insert([
			'position' => 2,
			'step' => 1,
			'start' => 1,
			'generator_id' => 1
		]);

		DB::table('incrementfragments')->insert([
			'position' => 2,
			'step' => 1,
			'start' => 1,
			'generator_id' => 2
		]);
    }
}
