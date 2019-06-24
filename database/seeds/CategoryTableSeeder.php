<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::truncate();
        
        $factories = ['TV show', 'Star', 'music', 'Văn hóa', 'Đời sống'];

        for($i=0; $i<count($factories); $i++)
        {
                \App\Category::create([
                 'name' => $factories[$i],
             ]);
        }
    }
}
