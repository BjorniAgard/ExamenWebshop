<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '1',
            'amount' => '10',
        ]);
        DB::table('order_product')->insert([
            'order_id' => '2',
            'product_id' => '2',
            'amount' => '40',
        ]);
        DB::table('order_product')->insert([
            'order_id' => '2',
            'product_id' => '1',
            'amount' => '20',
        ]);
        DB::table('order_product')->insert([
            'order_id' => '3',
            'product_id' => '1',
            'amount' => '15',
        ]);
    }
}
