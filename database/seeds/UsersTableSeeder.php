<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//factory(App\User::class, 10)->create();
		
		$user = new User;
	    $user->name = 'Tanveer';
	    $user->email = 'tanveer@gmail.com';
	    $user->password = bcrypt('123456');
		$user->role=1;
	    $user->save();

		$user = new User;
	    $user->name = 'Sharif';
	    $user->email = 'sharif@gmail.com';
	    $user->password = bcrypt('123456');
		$user->role=2;
	    $user->save();

		$user = new User;
	    $user->name = 'joyabrick';
	    $user->email = 'joyabrick@gmail.com';
	    $user->password = bcrypt('123456');
		$user->role=0;
	    $user->save();

    }
}
