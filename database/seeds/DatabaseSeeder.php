<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            CategoryTableSeeder::class,
            CompanyTableSeeder::class,
            EmployeeTableSeeder::class,
            ProductTableSeeder::class,
            UserTableSeeder::class,
            OrderTableSeeder::class,
            OrderProductTableSeeder::class,
        ]);
    }
}
