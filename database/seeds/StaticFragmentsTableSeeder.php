<?php

use Illuminate\Database\Seeder;

class StaticFragmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('staticfragments')->insert([
			'position' => 1,
			'value' => 'https://www.drivechicago.com/newcars?zip=60559&distance=250&beginYear=1990&endYear=2027&mileagelow=&mileageHigh=&colorExt=any&colorInt=any&highPrice=&lowPrice=0&bodyType=any&transmission=any&engine=any&certified=0&trim=any&start=140&page=',
			'generator_id' => 1
		]);
		DB::table('staticfragments')->insert([
			'position' => 3,
			'value' => '&sortby=distancesortexp',
			'generator_id' => 1
		]);
    }
}
