<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'date' => '2020-04-24',
            'status' => '1',
            'employee_id' => '1',
            'company_id' => '1',
            'customer_id' => '1',
        ]);
        DB::table('orders')->insert([
            'date' => '2020-04-24',
            'status' => '0',
            'employee_id' => '2',
            'company_id' => '1',
            'customer_id' => '2',
        ]);
        DB::table('orders')->insert([
            'date' => '2020-04-24',
            'status' => '1',
            'employee_id' => '3',
            'company_id' => '1',
            'customer_id' => '3',
        ]);
    }
}
