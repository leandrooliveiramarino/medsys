<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Mazzatech',
            'email' => 'mazza@tech.com.br',
            'password' => bcrypt('mazzatech'),
            'remember_token' => str_random(10)
        ]);
    }
}
