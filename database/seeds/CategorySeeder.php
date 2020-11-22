<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categories_name' => 'Hand Bouquet (Gift)',
            'categories_image' => 'hand_bouquet.jpg'
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'Wedding Bouquet',
            'categories_image' => 'wedding_bouquet.jpg'
        ]);

        DB::table('categories')->insert([
            'categories_name' => 'Table Arrangement',
            'categories_image' => 'table_arrangement.jpg'
        ]);
    }
}
