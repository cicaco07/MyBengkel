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
            [
                'user_id' => '11',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5679 LX',
                'recommended_service' => '',
                'plan_date' => '2018-1-29 15:00:00',
                'price' => '100000',
            ],
            [
                'user_id' => '18',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5680 LA',
                'recommended_service' => '',
                'plan_date' => '2018-2-29 15:00:00',
                'price' => '100000',
            ],
            [
                'user_id' => '24',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5681 LI',
                'recommended_service' => '',
                'plan_date' => '2018-3-29 15:00:00',
                'price' => '80000',
            ],
            [
                'user_id' => '25',
                'dealer_id' => '1',
                'problem' => 'Ganti Roller',
                'plat_num' => 'N 5682 LI',
                'recommended_service' => '',
                'plan_date' => '2018-4-29 15:00:00',
                'price' => '50000',
            ],
            [
                'user_id' => '26',
                'dealer_id' => '1',
                'problem' => 'Ganti Kampas Rem',
                'plat_num' => 'N 5683 LI',
                'recommended_service' => '',
                'plan_date' => '2018-5-29 15:00:00',
                'price' => '40000',
            ],
            [
                'user_id' => '27',
                'dealer_id' => '1',
                'problem' => 'Ganti Roller',
                'plat_num' => 'N 5684 LI',
                'recommended_service' => '',
                'plan_date' => '2018-6-29 15:00:00',
                'price' => '50000',
            ],
            [
                'user_id' => '28',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5685 LI',
                'recommended_service' => '',
                'plan_date' => '2018-7-29 15:00:00',
                'price' => '100000',
            ],
            [
                'user_id' => '29',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5686 LI',
                'recommended_service' => '',
                'plan_date' => '2018-8-29 15:00:00',
                'price' => '100000',
            ],
            [
                'user_id' => '30',
                'dealer_id' => '1',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5687 LI',
                'recommended_service' => '',
                'plan_date' => '2018-10-29 15:00:00',
                'price' => '100000',
            ],
        ]);
    }
}
