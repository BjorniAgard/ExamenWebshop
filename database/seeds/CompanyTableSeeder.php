<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'title' => 'Enterprise',
            'description' => 'dit is een descriptie',
            'address' => 'meesterstraat 43',
            'postal_code' => '1333 RL',
            'city' => 'Almere',
            'telephone' => '061394028',
        ]);

    }
}
