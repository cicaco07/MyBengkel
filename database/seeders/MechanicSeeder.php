<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mechanic')->insert([
            [
                'user_id' => '1',
                'dealer_id' => '1',
                'position' => 'Kepala Mekanik'
            ],
            [
                'user_id' => '9',
                'dealer_id' => '1',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '10',
                'dealer_id' => '1',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '16',
                'dealer_id' => '2',
                'position' => 'Kepala Mekanik'
            ],
            [
                'user_id' => '19',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '22',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '26',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '27',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '28',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '29',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
            [
                'user_id' => '30',
                'dealer_id' => '2',
                'position' => 'Mekanik'
            ],
        ]);
    }
}
