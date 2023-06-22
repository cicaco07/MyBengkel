<?php

namespace Database\Seeders;

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
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5678 LI',
            ],
            [
                'user_id' => '11',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2010',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 1234 LI',
            ],
            [
                'user_id' => '18',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 0987 LI',
            ],
            [
                'user_id' => '23',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2010',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 4321 LI',
            ],
            [
                'user_id' => '24',
                'dealer_id' => '1',
                'vehicle_name'=> 'Mio 2002',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 7690 LI',
            ],
            [
                'user_id' => '25',
                'dealer_id' => '2',
                'vehicle_name'=> 'Mio 2005',
                'problem' => 'Ganti Oli',
                'plat_num' => 'N 5679 LX',
            ],
            [
                'user_id' => '18',
                'dealer_id' => '2',
                'vehicle_name'=> 'Mio 2006',
                'problem' => 'Ganti Ban',
                'plat_num' => 'N 5680 LA',
            ],
        ]);
    }
}
