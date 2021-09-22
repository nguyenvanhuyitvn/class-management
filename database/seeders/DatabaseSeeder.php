<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('classrooms')->delete();
        
        \DB::table('classrooms')->insert([
            ['id' => 1, 'name' => 'BKD01K11'],
            ['id' => 2, 'name' => 'BKD02K11']
        ]);

        \DB::table('users')->insert([
            ['id' => 1, 'name' => 'Nguyen van A','email' => 'a@gmail.com', 'id_class'=>1, 'password' => Hash::make('password')],
            ['id' => 2, 'name' => 'Nguyen van B','email' => 'b@gmail.com', 'id_class'=>1,'password' => Hash::make('password')],
            ['id' => 3, 'name' => 'Nguyen van C','email' => 'c@gmail.com', 'id_class'=>2,'password' => Hash::make('password')]
        ]);
    }
}
