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
        DB::table('users')->insert([
            'user_name' => 'admin',
            'password' => bcrypt('secret'),
        ]);
        // $this->call(CategoryTableSeeder::class);

    }
}
