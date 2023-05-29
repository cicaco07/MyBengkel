<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dealer')->insert([
            [
                'user_id' => '2',
                'dealer_name' => 'Agung Motor',
                'dealer_address' => 'Jl. Raya Sumbermanjing Wetan No. 131, Malang',
                'company' => 'Yamaha',
            ],
            [
                'user_id' => '4',
                'dealer_name' => 'Arjuna Motor',
                'dealer_address' => 'Jl. Panglima Sudirman No. 103, Turen, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '6',
                'dealer_name' => 'Cahaya Motor',
                'dealer_address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '7',
                'dealer_name' => 'Dau Motor',
                'dealer_address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '8',
                'dealer_name' => 'Gondang Legi Indah',
                'dealer_address' => 'Jl. Raya Hayam Wuruk (utara Rsi), Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '12',
                'dealer_name' => 'Hidayah Motor',
                'dealer_address' => 'Mulyosari Rt 01 / Rw 01 Donomulyo, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '13',
                'dealer_name' => 'Kartika Sari',
                'dealer_address' => 'Jl. Jaksa Agung Suprapto 54, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '14',
                'dealer_name' => 'Centratama',
                'dealer_address' => 'Jl. Kol. Sugiono 154, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '15',
                'dealer_name' => 'Cahaya Motor',
                'dealer_address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '20',
                'dealer_name' => 'Dau Motor',
                'dealer_address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '21',
                'dealer_name' => 'Motor Galih',
                'dealer_address' => 'Jl. Raya No. 66 Tumpang, Malang',
                'company' => 'Honda',
            ],
            [
                'user_id' => '23',
                'dealer_name' => 'Dwimitra Malang',
                'dealer_address' => 'Jl. Arif Margono No. 45, Malang',
                'company' => 'Honda',
            ],

        ]);
    }
}
