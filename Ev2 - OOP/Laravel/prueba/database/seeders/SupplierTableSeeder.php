<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            'name' => 'amazon',
            'addres' => 'plaza',
            'city' => 'zaragoza',
            'country' => 'zaragoza',
            'contact_id' => '1',
        ]);
        DB::table('suppliers')->insert([
            'name' => 'ali',
            'addres' => 'noje',
            'city' => 'coruña',
            'country' => 'coruña',
            'contact_id' => '2',
        ]);
        DB::table('suppliers')->insert([
            'name' => 'dfdeAF',
            'addres' => 'xd',
            'city' => 'madrid',
            'country' => 'madrid',
            'contact_id' => '3',
        ]);

    }
}
