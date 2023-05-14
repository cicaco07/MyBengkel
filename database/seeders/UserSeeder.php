<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username'=>'aryo',
                'role'=> 'Mekanik',
                'name'=> 'Aryo Deva', 
                'email'=> 'aryo@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441678', 
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'bryan',
                'name'=> 'Bryan Tosin',
                'role'=> 'Kepala Mekanik', 
                'email'=> 'bryan@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441671',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'desy',
                'name'=> 'Desy Ayu',
                'role'=> 'Customer', 
                'email'=> 'desy@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441672',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'dani',
                'name'=> 'Febrian Dani', 
                'role'=> 'Admin',
                'email'=> 'dani@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441673',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'rafi',
                'name'=> 'Rafi Prabowo',
                'role'=> 'Dealer', 
                'email'=> 'rafi@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441674',
                'password'=> Hash::make('password')
            ],
        ]);
    }
}