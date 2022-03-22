<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('categories')->insert([
            [
                'category_name'=>'Electronics',
                'category_desc'=>'Electronics Descritpion'
            ],
            [
                'category_name'=>'Home Appliances',
                'category_desc'=>'Home Appliances Descritpion'
            ],
            [
                'category_name'=>'Faishion',
                'category_desc'=>'Faishion Descritpion'
            ],
            
        ]);
    }
}
