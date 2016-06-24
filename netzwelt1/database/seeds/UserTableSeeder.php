<?php


use App\User;
use Illuminate\Database\Seeder; 

class UserTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'first_name' => 'Gayle',
			'last_name' => 'Nebrija',
			'username' => 'gaylenebrija@gmail.com',
			'password' => Hash::make('1234567')
			));
	}
}