<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name' => 'Piet',
            'last_name' => 'Steer',
            'email' => 'pietsteer@gmail.com',
            'address' => 'meesterstraat 43',
            'telephone' => '061394028',
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Kees',
            'last_name' => 'Kas',
            'email' => 'keeskas@gmail.com',
            'address' => 'meesterstraat 43',
            'telephone' => '061397028',
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Sjaak',
            'last_name' => 'Heim',
            'email' => 'SjaakHeim@gmail.com',
            'address' => 'meesterstraat 43',
            'telephone' => '061394038',
        ]);
    }
}
