<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5678 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-29 15:00:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '11',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2010',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 1234 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-29 15:30:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '18',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 0987 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-29 16:00:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '23',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2010',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 4321 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-29 16:45:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '24',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 7690 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-30 08:00:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '24',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 2232 LI',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-30 08:45:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '25',
                'dealer_id' => '6',
                'vehicle_name'=> 'Mio 2005',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5679 LX',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-30 16:00:00'),
                'price' => '100000',
            ],
            [
                'user_id' => '18',
                'dealer_id' => '11',
                'vehicle_name'=> 'Mio 2006',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 5680 LA',
                'recommended_service' => '',
                'plan_date' => Carbon::parse('2018-10-29 16:00:00'),
                'price' => '100000',
            ],

        ]);
    }
}
