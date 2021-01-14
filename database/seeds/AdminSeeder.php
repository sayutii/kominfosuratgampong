<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Muhammad Sayuti',
            'usertype' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '082320826336',
        ]);
    }
}
