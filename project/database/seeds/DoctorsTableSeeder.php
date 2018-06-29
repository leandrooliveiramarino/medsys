<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name' => 'Bruno',
            'expertise_id' => 1,
            'user_id' => 1
        ]);

        DB::table('doctors')->insert([
            'name' => 'Mateus',
            'expertise_id' => 1,
            'user_id' => 1
        ]);

        DB::table('doctors')->insert([
            'name' => 'Gabriel',
            'expertise_id' => 3,
            'user_id' => 1
        ]);
    }
}
