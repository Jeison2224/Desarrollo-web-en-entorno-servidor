<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Papel higiénico',
            'description' => 'Papel higiénico extrasuave para culos sensibles',
            'price' => '1.35',
            'stock' => '20',
        ]);
        DB::table('products')->insert([
            'name' => 'Lejía blanca 1L',
            'description' => 'Lejía pura capaz de traladrar las baldosas',
            'price' => '0.95',
            'stock' => '10',
        ]);
        DB::table('products')->insert([
            'name' => 'Detergente Ariel 1.5L',
            'description' => 'Detergente líquido para lavadoras',
            'price' => '4.90',
            'stock' => '2',
        ]);
        DB::table('products')->insert([
            'name' => 'Gel Hidroalcohólico 350ml',
            'description' => 'Gel hidroalcólico sin perfume, 70% de alcohol',
            'price' => '3.50',
            'stock' => '25',
        ]);
        DB::table('products')->insert([
            'name' => 'Gel de baño con avena - 750 ml',
            'description' => 'Gel de baño con aceites vegetales, hipoalergénico',
            'price' => '1.50',
            'stock' => '50',
        ]);
    }
}