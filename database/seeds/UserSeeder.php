<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Alex Joel Henriquez Suarez',
        	'email' => 'alex.henriquez@gmail.com',
        	'email_verified_at' => Carbon::now(),
        	'password' => Hash::make('123456789'),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
        	'name' => 'Alexander Joel Henriquez Suarez',
        	'email' => 'joel.henriquez@gmail.com',
        	'email_verified_at' => Carbon::now(),
        	'password' => Hash::make('123456789'),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
