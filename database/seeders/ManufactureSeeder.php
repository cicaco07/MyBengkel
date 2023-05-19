<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacture')->insert([
            ['brand' => 'Yamaha',],
            ['brand' => 'Suzuki',],
            ['brand' => 'Honda',],
        ]);
    }
}
