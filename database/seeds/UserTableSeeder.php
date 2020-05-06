<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jaap',
            'telephone' => '0634829342',
            'address' => 'feertigstraat33',
            'email' => 'test@example.nl',
            'user_role_id' => '2',
            'password' => 'test'
        ]);
        DB::table('users')->insert([
            'name' => 'Mike',
            'telephone' => '0634859342',
            'address' => 'feertigstraat33',
            'email' => 'Mike@example.nl',
            'user_role_id' => '1',
            'password' => 'test'
        ]);
        DB::table('users')->insert([
            'name' => 'Robin',
            'telephone' => '0644829342',
            'address' => 'feertigstraat33',
            'email' => 'Robin@example.nl',
            'user_role_id' => '2',
            'password' => 'test'
        ]);
    }
}
