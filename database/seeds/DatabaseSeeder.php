<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
         	'fname' => 'Sanz',
         	'lname' => 'Moses',
            'username' => 'sanz31',
            'email' => 'sanz@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('sanz31'),
        ]);

         DB::table('users')->insert([
         	'fname' => 'Master',
         	'lname' => 'Master',
            'username' => 'master',
            'email' => 'master@gmail.com',
            'role' => 'master',
            'password' => bcrypt('master'),
        ]);

         DB::table('users')->insert([
         	'fname' => 'Kaye',
         	'lname' => 'Marga',
            'username' => 'kaye21',
            'email' => 'kaye@gmail.com',
            'role' => 'member',
            'password' => bcrypt('kaye21'),
        ]);

         factory(App\User::class, 20)->create();
    }
}
