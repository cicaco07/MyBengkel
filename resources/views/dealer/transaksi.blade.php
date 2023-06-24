@extends('dealer.header')

@section('title', 'Dealer - Transaksi')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi</div>
    <div class="w-full p-4 mb-7 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple dark:text-white">Bulan 6</h5>
        <br>
        <div class="w-full md:mb-30">
            <!-- Tombol Print -->
            <a href="{{ route('dealer.print', ['month' => 6]) }}" target="_blank" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>
            <!-- Tautan Transaksi Servis -->
            <a href="{{ route('dealer.servis6') }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Servis</a>
            <!-- Tautan Transaksi Sparepart -->
            <a href="{{ route('dealer.transaksisparepart') }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Sparepart</a>
        </div>
    </div>

    <div class="w-full p-4 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple dark:text-white">Bulan 7</h5>
        <br>
        <div class="w-full md:mb-30">
            <!-- Tombol Print -->
            <a href="{{ route('dealer.print', ['month' => 7]) }}" target="_blank" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>
            <!-- Tautan Transaksi Servis -->
            <a href="{{ route('dealer.servis7') }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Servis</a>
            <!-- Tautan Transaksi Sparepart -->
            <a href="{{ route('dealer.transaksisparepart7') }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Sparepart</a>
        </div>
    </div>
</div>
@endsection
