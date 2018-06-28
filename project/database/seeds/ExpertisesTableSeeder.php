<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertises')->insert([
            'expertise' => 'Neurologista'
        ]);

        DB::table('expertises')->insert([
            'expertise' => 'Cardiologista'
        ]);

        DB::table('expertises')->insert([
            'expertise' => 'Dermatologista'
        ]);
    }
}
