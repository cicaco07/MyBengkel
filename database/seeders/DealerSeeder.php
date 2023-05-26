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

        ]);
    }
}
