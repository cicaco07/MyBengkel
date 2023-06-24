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
                'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.3896040647373!2d112.69121587387211!3d-8.263962183042628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61c6ad2fddd73%3A0x65fb87dee22d5863!2sJl.%20Raya%20Sumbermanjing%20Wetan%20No.131%2C%20Krajan%2C%20Sumbermanjing%20Wetan%2C%20Kec.%20Sumbermanjing%20Wetan%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur%2065176!5e0!3m2!1sid!2sid!4v1687606442088!5m2!1sid!2sid'
            ],
            [
                'user_id' => '4',
                'dealer_name' => 'Arjuna Motor',
                'dealer_address' => 'Jl. Panglima Sudirman No. 103, Turen, Malang',
                'company' => 'Yamaha',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '6',
                'dealer_name' => 'Cahaya Motor',
                'dealer_address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'company' => 'Yamaha',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '7',
                'dealer_name' => 'Dau Motor',
                'dealer_address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'company' => 'Yamaha',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '8',
                'dealer_name' => 'Gondang Legi Indah',
                'dealer_address' => 'Jl. Raya Hayam Wuruk (utara Rsi), Malang',
                'company' => 'Yamaha',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '12',
                'dealer_name' => 'Hidayah Motor',
                'dealer_address' => 'Mulyosari Rt 01 / Rw 01 Donomulyo, Malang',
                'company' => 'Honda',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '13',
                'dealer_name' => 'Kartika Sari',
                'dealer_address' => 'Jl. Jaksa Agung Suprapto 54, Malang',
                'company' => 'Honda',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '14',
                'dealer_name' => 'Centratama',
                'dealer_address' => 'Jl. Kol. Sugiono 154, Malang',
                'company' => 'Honda',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '15',
                'dealer_name' => 'Cahaya Motor',
                'dealer_address' => 'Jl. Raya Mandoroko Kav. 3, Malang',
                'company' => 'Honda',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '20',
                'dealer_name' => 'Dau Motor',
                'dealer_address' => 'Jl. Raya.mulyoagung 9 Jetis Dau, Malang',
                'company' => 'Honda',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '21',
                'dealer_name' => 'Motor Galih',
                'dealer_address' => 'Jl. Raya No. 66 Tumpang, Malang',
                'company' => 'Suzuki',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],
            [
                'user_id' => '23',
                'dealer_name' => 'Dwimitra Malang',
                'dealer_address' => 'Jl. Arif Margono No. 45, Malang',
                'company' => 'Suzuki',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4699.144760674611!2d112.61842313156015!3d-7.9478794941768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1687606052357!5m2!1sid!2sid'
            ],

        ]);
    }
}
