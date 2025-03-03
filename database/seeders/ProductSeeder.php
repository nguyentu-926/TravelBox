<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Laptop Dell XPS 13',
            'description' => 'Laptop cao cấp từ Dell',
            'price' => 29990000,
            'image' => 'dell-xps13.jpg',
            'stock' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
