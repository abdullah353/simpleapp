<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        \App\User::create(array(
            'name' => 'abc',
            'email' => 'rand@xyz.com',
            'password' => Hash::make('12345')
        ));

        \App\User::create(array(
            'name' => 'abc2',
            'email' => 'rand2@xyz.com',
            'password' => Hash::make('123454')
        )); 

    }

}
