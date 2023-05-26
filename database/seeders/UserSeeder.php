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
                'name'=> 'Aryo Deva',
                'email'=> 'aryo@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441678',
                'role'=> 'mechanic', 
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'bryan',
                'name'=> 'Bryan Tosin',
                'email'=> 'bryan@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441671',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'desy',
                'name'=> 'Desy Ayu',
                'email'=> 'desy@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441672',
                'role'=> 'admin',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'dani',
                'name'=> 'Febrian Dani',  
                'email'=> 'dani@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441673',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'rafi',
                'name'=> 'Rafi Prabowo',
                'email'=> 'rafi@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441674',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'agung',
                'name'=> 'Agung Malik',
                'email'=> 'agung@gmail.com',
                'address' => 'Bondowoso', 
                'phone_number'=> '082333441671',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'aldin',
                'name'=> 'Aldin Ariel',
                'email'=> 'aldin@gmail.com',
                'address' => 'Batu', 
                'phone_number'=> '081332241671',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'yoga',
                'name'=> 'Yofandra Arta',
                'email'=> 'yoga@gmail.com',
                'address' => 'Blitar', 
                'phone_number'=> '082126641671',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
        ]);
    }
}