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
                'image' => 'https://castrol.com/content/dam/castrol/country-sites/en_gb/united-kingdom/home/castrol-story/power1-products-promo.png',
                'quantity_left' => 300,
                'price' => 76500,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Motul',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTru_0Fm-sNX0IkjwS1VM8gzrPHmb9LBvbfhA&usqp=CAU',
                'quantity_left' => 100,
                'price' => 50000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Yamalube',
                'image' => 'https://www.yamaha-motor.co.id/uploads/sparepart/2019112909105393118V3412.png',
                'quantity_left' => 250,
                'price' => 125000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Filter Udara',
                'image' => 'https://i0.wp.com/setia1heri.com/wp-content/uploads/2019/05/plus-minus-open-filter-pada-sepeda-motor.jpg?resize=700%2C700&ssl=1',
                'quantity_left' => 50,
                'price' => 700000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Kampas Rem Depan',
                'image' => 'https://www.hondacengkareng.com/wp-content/uploads/2017/11/Pad-Set-FR-06455KVBT01-600x600.jpg',
                'quantity_left' => 200,
                'price' => 500000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Kampas Rem Belakang',
                'image' => 'https://www.hondacengkareng.com/wp-content/uploads/2019/05/06435KSPB02.jpg',
                'quantity_left' => 100,
                'price' => 500000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Rantai',
                'image' => 'https://akcdn.detik.net.id/visual/2020/02/02/18f99ea0-b0cd-4994-9686-981b1eef43b0_169.jpeg?w=650',
                'quantity_left' => 1000,
                'price' => 50000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Gir Depan',
                'image' => 'https://maniakmotor.com/images/APRIL2014/MINGGU4/AS%20GIR%20TK%20Racing%20Custom.jpg',
                'quantity_left' => 1000,
                'price' => 50000,
            ],
            [
                'dealer_id' => 1,
                'item_name' => 'Gir Belakang',
                'image' => 'https://s4.bukalapak.com/img/4699470233/large/Gir_belakang_untuk_motor_JUPITER_MX___Rear_sporcket_428_41T_.jpeg',
                'quantity_left' => 1000,
                'price' => 50000,
            ],
            [
                'dealer_id' => 3,
                'item_name' => 'Piston',
                'image' => 'https://s1.bukalapak.com/uploads/content_attachment/6cd7a4cb30e8d762bedf82c5/original/Piston_Suzuki_010.jpg',
                'quantity_left' => 300,
                'price' => 150000,
            ],
            [
                'dealer_id' => 2,
                'item_name' => 'Ring Piston',
                'image' => 'https://imgx.gridoto.com/crop/0x162:1024x822/700x465/photo/gridoto/2018/09/07/1252467113.jpg',
                'quantity_left' => 300,
                'price' => 150000,
            ],
        ];

        foreach ($spareparts as $sparepart) {
            Sparepart::create($sparepart);
        }
    }
}
