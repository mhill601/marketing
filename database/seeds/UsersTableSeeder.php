<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::truncate();

		User::create([
			'email' => 'mhill601@gmail.com',
			'password' => Hash::make('test'),
			'name' => 'Mark Hill'
		]);
    }
}
