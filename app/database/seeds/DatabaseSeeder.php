<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $this->call('UsersTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(array(
            'id' => 1,
            'email' => 'xd.peter73@gmail.com',
            'password' => Hash::make('22800114'),
            'rol' => 1,
            'real_name' => 'Pedro Carvajal',
            'status' => 1
        ));
    }
}
