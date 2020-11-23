<?php

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
            'name' => 'Manager',
            'password' => 'manager123',
            'gender' => 'Male',
            'email' => 'manager@gmail.com',
            'address' => 'Vila Nusa Indah 2 Blok Y4/2',
            'dob' => '2000-07-07 00:00:00',
            'role' => 'Manager'
        ]);

        DB::table('users')->insert([
            'name' => 'Geo',
            'password' => 'geo777000',
            'gender' => 'Male',
            'email' => 'syahrun.baso@gmail.com',
            'address' => 'Vila Nusa Indah 2 Blok Y4/1',
            'dob' => '2000-07-07 00:00:00',
            'role' => 'User'
        ]);
    }
}
