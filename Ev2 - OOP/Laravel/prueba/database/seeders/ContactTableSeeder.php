<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts')->insert([
            'name' => 'amazon',
            'surname' => 'xd',
            'email' => 'zaragoza@gmail.com',
            'phone_number' => '629531487',
            'supplier_id' => '1',
        ]);
        DB::table('contacts')->insert([
            'name' => 'ali',
            'surname' => 'noje',
            'email' => 'coruña@gmail.com',
            'phone_number' => '629531487',
            'supplier_id' => '2',
        ]);
        DB::table('contacts')->insert([
            'name' => 'dfdeAF',
            'surname' => 'lmao',
            'email' => 'madrid@gmail.com',
            'phone_number' => '629531487',
            'supplier_id' => '3',
        ]);
    }
}
