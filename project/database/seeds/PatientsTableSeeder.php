<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'name' => 'Galvão',
            'user_id' => 1
        ]);

        DB::table('patients')->insert([
            'name' => 'Arnaldo',
            'user_id' => 1
        ]);
    }
}
