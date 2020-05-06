<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Metabo BS 18 LT 2,0Ah',
            'description' => 'lorem ipsum',
            'price' => '45',
            'stock' => '300',
            'category_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Makita DLM431PT2',
            'description' => 'lorem ipsum',
            'price' => '20',
            'stock' => '200',
            'category_id' => '5',
        ]);
        DB::table('products')->insert([
            'name' => 'DeWalt DCM565P1-QW',
            'description' => 'lorem ipsum',
            'price' => '15',
            'stock' => '200',
            'category_id' => '2',
        ]);
    }
}
