<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('shops')->insert([
            'name' => Str::random(10),
            'item' => Str::random(10),
            'stock' => Str::random(10),
            'testing' => Str::random(10)
         ,
        ]);
    }
}
