<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Frutas',
            'slug' => 'frutas',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cremes e Geleias',
            'slug' => 'Cremes e Geleias'
        ]);
    }
}
