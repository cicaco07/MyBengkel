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
                'first_name'=> 'Aryo', 
                'last_name'=> 'Deva', 
                'email'=> 'aryo@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441678',
                'role'=> 'mechanic', 
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'bryan',
                'first_name'=> 'Bryan',
                'last_name'=> 'Tosin',
                'email'=> 'bryan@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441671',
                'role'=> 'master_mechanic',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'desy',
                'first_name'=> 'Desy',
                'last_name'=> 'Ayu',
                'email'=> 'desy@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441672',
                'role'=> 'admin',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'dani',
                'first_name'=> 'Febrian', 
                'last_name'=> 'Dani', 
                'email'=> 'dani@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441673',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'rafi',
                'first_name'=> 'Rafi',
                'last_name'=> 'Prabowo',
                'email'=> 'rafi@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082333441674',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
        ]);
    }
}