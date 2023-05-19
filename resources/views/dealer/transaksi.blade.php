@extends('dealer.header')

@section('title', 'Delaer - Transaksi')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi</div>
        <div>
            <a href="/dealer/transaksiall" class="text-primary text-black bg-purple my-6 hover:bg-black-800 hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button"">Data Transaksi</a>    
        </div>
            <div class="w-full p-4 mb-7 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple dark:text-white">Ahmad Dani</h5>
                <h5 class="text-normal text-purple">Honda Beat | N 1345 AB</h5>
                <br>
                <div class="w-full md:mb-30">
                    <a href="#" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>    
                    <a href="/dealer/transaksiservis" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Servis</a>    
                    <a href="/dealer/transaksisparepart" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Sparepart</a>    
                </div>
            
            </div>

    <div class="w-full p-4 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple dark:text-white">Aryo Deva</h5>
        <h5 class="text-normal text-purple">honda Beat | N 2456 AH</h5>
        <br>
        <div class="w-full md:mb-30">
            <a href="#" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>    
            <a href="#" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Servis</a>    
            <a href="#" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Sparepart</a>    
        </div>
    
    </div>
</div>
</div>
    
@endsection