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
                'role_id'=> '1',
                'first_name'=> 'Aryo', 
                'last_name'=> 'Deva', 
                'email'=> 'aryo@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441678', 
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'bryan',
                'first_name'=> 'Bryan',
                'last_name'=> 'Tosin',
                'role_id'=> '2', 
                'email'=> 'bryan@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441671',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'desy',
                'first_name'=> 'Desy',
                'last_name'=> 'Ayu',
                'role_id'=> '3', 
                'email'=> 'desy@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441672',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'dani',
                'first_name'=> 'Febrian', 
                'last_name'=> 'Dani', 
                'role_id'=> '4',
                'email'=> 'dani@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441673',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'rafi',
                'first_name'=> 'Rafi',
                'last_name'=> 'Prabowo',
                'role_id'=> '5', 
                'email'=> 'rafi@gmail.com',
                'alamat' => 'Malang', 
                'no_handphone'=> '082333441674',
                'password'=> Hash::make('password')
            ],
        ]);
    }
}