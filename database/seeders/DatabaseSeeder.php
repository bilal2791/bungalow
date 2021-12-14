<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //    ShopSeeder::class,

        // ]);

        // \App\Models\Shop::factory(100)->create();
        // \App\Models\Employee::factory(100)->create();
         \App\Models\Customer::factory(500)->create();
    }
}
