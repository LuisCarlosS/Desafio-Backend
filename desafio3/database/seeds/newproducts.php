<?php

use Illuminate\Database\Seeder;

class newproducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Acerola',
            'slug' => 'acerola',
            'price' => 90.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Caju',
            'slug' => 'caju',
            'price' => 100.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Goiaba',
            'slug' => 'goiaba',
            'price' => 50.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Limão',
            'slug' => 'limao',
            'price' => 20.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Geleia de Pimenta',
            'slug' => 'geleia-de-pimenta',
            'price' => 40.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Creme inglês',
            'slug' => 'creme-ingles',
            'price' => 15.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Geleia de amora',
            'slug' => 'geleia-de-amora',
            'price' => 23.00
        ]);
    }
}
