<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mechanic')->insert([
            [
                'user_id' => '1',
                'dealer_id' => '1',
                'position' => 'Kepala Mekanik'
            ],
        ]);
    }
}
