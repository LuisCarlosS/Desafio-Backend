<?php

use Illuminate\Database\Seeder;

class product extends Seeder
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
            'name' => 'Abacaxi',
            'slug' => 'abacaxi',
            'price' => 10.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Abacate',
            'slug' => 'abacate',
            'price' => 10.00
        ]);
    }
}
