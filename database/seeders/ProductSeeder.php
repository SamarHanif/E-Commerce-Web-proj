<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [

                'name' => 'PELL',
                'price' => "10000",
                'description' => "a smart phone controlled fridge",
                'category' => "refrigerator",
                'gallery' => "Fridge image link",
              
            ],
            [

                'name' => 'OPPO Phone',
                'price' => "20000",
                'description' => "a smart phone with 8gm ram",
                'category' => "mobile",
                'gallery' => "OPPO image link",
              
            ],
            [

                'name' => 'Samsung TV',
                'price' => "10000",
                'description' => "Smart TV cum LED",
                'category' => "tv",
                'gallery' => "samsung TV image link",
              
            ],
            [

                'name' => 'LG TV',
                'price' => "15000",
                'description' => "a smart phone with 4gm ram",
                'category' => "mobile",
                'gallery' => "lg TV image link",
              
            ]
        ]);
    }
}
