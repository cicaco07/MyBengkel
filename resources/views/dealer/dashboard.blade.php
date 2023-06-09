@extends('dealer.header')

@section('title', 'Dealer - Dashboard')

@section('role', 'Dealer')

@section('main-content')
<div class="text-purple mt-20 font-semibold text-2xl tracking-wide">Dashboard</div>
    <div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
        <div class="text-purple m-4 font-semibold text-lg md:text-2xl tracking-wide">Selamat Datang, {{ $user->name }}</div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Dealer Ku</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Lihat data diri dealer kamu, lakukan perubahan jika datamu tidak sesuai</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="dealerku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Data Pegawai</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">List data pengawai yang terdaftar di dealer kamu</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="datapegawai" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Data Antrian</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Lihat data antrian yang sedang berlangsung di dealer kamu</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="antrian" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Data Servis</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Lihat data servis kamu yang sudah diselesaikan oleh dealer mu</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="dataservis" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Data Spare Part</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Lihat data sparepart yang tersedia di dealer kamu</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="datasparepart" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Data Transaksi</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Lihat data transaksi yang sudah terjadi di dealer kamu</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="transaksi" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
