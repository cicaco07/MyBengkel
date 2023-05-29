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
            [
                'username'=>'akbar',
                'name'=> 'Muhammad Akbar Nur Ihsan',
                'email'=> 'akbar@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126618471',
                'role'=> 'mechanic',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'kholid',
                'name'=> 'Kholid Maulidi',
                'email'=> 'kholid@gmail.com',
                'address' => 'Kalianget', 
                'phone_number'=> '082126641672',
                'role'=> 'mechanic',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'abhel',
                'name'=> 'Zhubair Abhel',
                'email'=> 'abhel@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126641673',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'isla',
                'name'=> 'Muhamad Islahuddin',
                'email'=> 'islaarema87@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082126618411',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'fahmi',
                'name'=> 'Muhamad Faruq',
                'email'=> 'faruq@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126618412',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'aldi',
                'name'=> 'Arainal Aldiansyah',
                'email'=> 'arainal@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126618413',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'raden',
                'name'=> 'Raden Rizky',
                'email'=> 'raden@gmail.com',
                'address' => 'Doko', 
                'phone_number'=> '082126618414',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'rizky',
                'name'=> 'Rizky Rohmatul',
                'email'=> 'rizky@gmail.com',
                'address' => 'Blitar', 
                'phone_number'=> '082126618415',
                'role'=> 'mechanic',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'roziq',
                'name'=> 'Roziq Mahbubi',
                'email'=> 'rozia@gmail.com',
                'address' => 'Batu', 
                'phone_number'=> '082126618416',
                'role'=> 'admin',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'trisinus',
                'name'=> 'Trisinus Gulo',
                'email'=> 'trisinus@gmail.com',
                'address' => 'Nias', 
                'phone_number'=> '082126618417',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'ikmal',
                'name'=> 'Ikmal Faris',
                'email'=> 'ikmal@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126618418',
                'role'=> 'mechanic',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'bima',
                'name'=> 'Bima Putra',
                'email'=> 'bima@gmail.com',
                'address' => 'Batu', 
                'phone_number'=> '082126618419',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'hanif',
                'name'=> 'Hanif Naufal Rafandi',
                'email'=> 'hanif@gmail.com',
                'address' => 'Blitar', 
                'phone_number'=> '082126618420',
                'role'=> 'dealer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'dio',
                'name'=> 'Maulidio Farhan',
                'email'=> 'dio@gmail.com',
                'address' => 'Bondowoso', 
                'phone_number'=> '082126618421',
                'role'=> 'mechanic',
                'password'=> Hash::make('password')
            ],

            
            [
                'username'=>'aulia',
                'name'=> 'Aulia Cahya',
                'email'=> 'aulia@gmail.com',
                'address' => 'Blitar', 
                'phone_number'=> '082126641674',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'oliv',
                'name'=> 'Fina Orivia',
                'email'=> 'oliv@gmail.com',
                'address' => 'Blitar', 
                'phone_number'=> '082126641675',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'muti',
                'name'=> 'Mutiara Devita Eka',
                'email'=> 'mumut@gmail.com',
                'address' => 'Sidoarjo', 
                'phone_number'=> '082126641676',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'devi',
                'name'=> 'Devi Andini F',
                'email'=> 'devit@gmail.com',
                'address' => 'Kras', 
                'phone_number'=> '082126641677',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'fina',
                'name'=> 'Alfina Salsabila',
                'email'=> 'fina@gmail.com',
                'address' => 'Kesamben', 
                'phone_number'=> '082126641678',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'maria',
                'name'=> 'Maria Fadilla',
                'email'=> 'maria@gmail.com',
                'address' => 'Kediri', 
                'phone_number'=> '082126641679',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'lime',
                'name'=> 'Liam Mega Pratiwi',
                'email'=> 'lime@gmail.com',
                'address' => 'Malang', 
                'phone_number'=> '082126641670',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
            [
                'username'=>'amal',
                'name'=> 'Amalia',
                'email'=> 'amal@gmail.com',
                'address' => 'Gresik', 
                'phone_number'=> '082126641681',
                'role'=> 'customer',
                'password'=> Hash::make('password')
            ],
        ]);
    }
}