<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			array(
				'username'  =>'admin',
				'email'      =>'admin@gmail.com',
				'password'   => Hash::make('admin'),
				'role_id'    => 1,
				'created_at' => date('Y-m-d H-i-s'),
				'updated_at' => date('Y-m-d H-i-s')
			),
			array(
				'username'  =>'user',
				'email'      =>'user@gmail.com',
				'password'   => Hash::make('user'),
				'role_id'    => 2,
				'created_at' => date('Y-m-d H-i-s'),
				'updated_at' => date('Y-m-d H-i-s')
			)
		);

		DB::table('users')->insert($users);
	}
}