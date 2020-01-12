<?php

use Illuminate\Database\Seeder;
use App\Dia;
class diasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = new Dia;
	    $user->name = 'Tanveer';
	    $user->address = 'Dhaka';
	    $user->save();
    }
}
