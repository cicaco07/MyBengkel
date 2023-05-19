<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch_company')->insert([
            [
                'name' => 'Agung Motor',
                'address' => 'Jl. Raya Sumbermanjing Wetan No. 131, Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Arjuna Motor',
                'address' => 'Jl. Panglima Sudirman No. 103, Turen, Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Cahaya Motor',
                'address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Dau Motor',
                'address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Gondang Legi Indah',
                'address' => 'Jl. Raya Hayam Wuruk (utara Rsi), Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Hidayah Motor',
                'address' => 'Mulyosari Rt 01 / Rw 01 Donomulyo, Malang',
                'brand_id' => '1',
            ],
            [
                'name' => 'Kartika Sari',
                'address' => 'Jl. Jaksa Agung Suprapto 54, Malang',
                'brand_id' => '2',
            ],
            [
                'name' => 'Centratama',
                'address' => 'Jl. Kol. Sugiono 154, Malang',
                'brand_id' => '2',
            ],
            [
                'name' => 'Cahaya Motor',
                'address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'brand_id' => '2',
            ],
            [
                'name' => 'Dau Motor',
                'address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'brand_id' => '2',
            ],
            [
                'name' => 'Motor Galih',
                'address' => 'Jl. Raya No. 66 Tumpang, Malang',
                'brand_id' => '2',
            ],
            [
                'name' => 'Dwimitra Malang',
                'address' => 'Jl. Arif Margono No. 45, Malang',
                'brand_id' => '3',
            ],
            [
                'name' => 'SMS Gadang',
                'address' => 'Satsui Tubun 44 Kav C1, Malang',
                'brand_id' => '3',
            ],
            [
                'name' => 'SMG Lawang 19',
                'address' => 'Jl. Raya Malang-Surabaya No.03 Lawang, Malang, 65211',
                'brand_id' => '3',
            ],
            [
                'name' => 'SMG Turen 21',
                'address' => 'Jl. Raya Kedok No. 195 Kedok, Turen, Malang, 65175',
                'brand_id' => '3',
            ],
            [
                'name' => 'Hidayah Motor',
                'address' => 'Mulyosari Rt 01 / Rw 01 Donomulyo, Malang',
                'brand_id' => '3',
            ],
        ]);
    }
}
