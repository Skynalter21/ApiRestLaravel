<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    
    public function run()
    {
        \App\Produto::factory()->count(10)->create();
    }
}
