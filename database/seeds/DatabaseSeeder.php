<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');

		$this->command->info('User table seeded!');
	}

}

/**
* Seed users table
*/
class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();

        User::create([
        			'name' => 'Jeremy Sarda',
        			'email' => 'jsarda@mcclainconcepts.com',
        			'password' => bcrypt('LaravelTestPW')
    				]);

        User::create([
        			'name' => 'Stu Pae',
        			'email' => 'stu.pae@gmail.com',
        			'password' => bcrypt('LaravelTestPW')
    				]);
	}
}
