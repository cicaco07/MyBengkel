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
                'namaitem' => 'Castrol',
                'stok' => 300,
                'harga' => 76500.00,
            ],
            [
                'namaitem' => 'Motul',
                'stok' => 100,
                'harga' => 50000.00,
            ],
            [
                'namaitem' => 'Yamalube',
                'stok' => 250,
                'harga' => 125000.00,
            ],
            [
                'namaitem' => 'Filter Udara',
                'stok' => 50,
                'harga' => 700000.00,
            ],
            [
                'namaitem' => 'Kampas Rem Depan',
                'stok' => 200,
                'harga' => 500000.00,
            ],
            [
                'namaitem' => 'Kampas Rem Belakang',
                'stok' => 100,
                'harga' => 500000.00,
            ],
            [
                'namaitem' => 'Rantai',
                'stok' => 1000,
                'harga' => 50000.00,
            ],
            [
                'namaitem' => 'Gir Depan',
                'stok' => 1000,
                'harga' => 50000.00,
            ],
            [
                'namaitem' => 'Gir Belakang',
                'stok' => 1000,
                'harga' => 50000.00,
            ],
            [
                'namaitem' => 'Piston',
                'stok' => 300,
                'harga' => 150000.00,
            ],
            [
                'namaitem' => 'Ring Piston',
                'stok' => 300,
                'harga' => 150000.00,
            ],
        ];

        foreach ($spareparts as $sparepart) {
            Sparepart::create($sparepart);
        }
    }
}
