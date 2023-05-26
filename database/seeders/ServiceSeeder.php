<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service')->insert([
            [
                'user_id' => '5',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5678 LI',
                'recommended_service' => '',
                'plan_date' => '2018-10-29 15:00:00',
                'price' => '100000',
            ],
        ]);
    }
}
