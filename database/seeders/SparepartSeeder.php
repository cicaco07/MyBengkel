<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sparepart;

class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spareparts = [
            [
                'dealer_id' => 1,
                'item_name' => 'Castrol',
                'image' => 'castrol.jpg',
                'quantity_left' => 300,
                'price' => 76500,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Motul',
                'image' => 'motul.jpeg',
                'quantity_left' => 100,
                'price' => 75000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Yamalube',
                'image' => 'Yamalube.png',
                'quantity_left' => 250,
                'price' => 45000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Filter Udara',
                'image' => 'filter udara.png',
                'quantity_left' => 50,
                'price' => 40000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Kampas Rem Depan',
                'image' => 'KampasRemDepan.jpg',
                'quantity_left' => 200,
                'price' => 68500,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Paket Service 1',
                'image' => '',
                'quantity_left' => 9999,
                'price' => 10000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Paket Service 2',
                'image' => '',
                'quantity_left' => 9999,
                'price' => 30000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Paket Service 3',
                'image' => '',
                'quantity_left' => 9999,
                'price' => 50000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Paket Service 4',
                'image' => '',
                'quantity_left' => 9999,
                'price' => 100000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Biaya Aplikasi',
                'image' => '',
                'quantity_left' => 9999,
                'price' => 2000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Kampas Rem Belakang',
                'image' => 'KampasRemBelakang.jpg',
                'quantity_left' => 100,
                'price' => 71500,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Rantai',
                'image' => 'rantai.jpeg',
                'quantity_left' => 1000,
                'price' => 155000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Gir Depan',
                'image' => 'girdepan.png',
                'quantity_left' => 1000,
                'price' => 99000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Gir Belakang',
                'image' => 'girbelakang.jpeg',
                'quantity_left' => 1000,
                'price' => 99000,
            ],
            [
                'dealer_id' => 3,
                'item_name' => 'Piston',
                'image' => 'Piston_Suzuki_010.jpg',
                'quantity_left' => 300,
                'price' => 325000,
            ],
        ];

        foreach ($spareparts as $sparepart) {
            Sparepart::create($sparepart);
        }
    }
}
