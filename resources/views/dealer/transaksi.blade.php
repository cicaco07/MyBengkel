@extends('dealer.header')

@section('title', 'Delaer - Transaksi')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi</div>
    <div>
        {{-- <a href="/dealer/transaksiall" class="text-primary text-black bg-purple my-6 hover:bg-black-800 hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button"">Data Transaksi</a>     --}}
    </div>
    <div class="w-full p-4 mb-7 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700 transaksi-servis-container" id="transaksi-servis-container-6">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple dark:text-white">Bulan 6</h5>
        <br>
        {{-- @foreach ($services as $index => $service) --}}
        <div class="w-full md:mb-30">
            <a href="#" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>
            <a href="{{ route('transaksi.servis', ['month' => 6]) }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center transaksi-servis-button" type="button" onclick="openModal(event)">
                Transaksi servis
            </a>
            
            @foreach ($services as $index => $service)
                <!-- Modal -->
                <div class="flex justify-center text-center">
                    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <!-- Modal Content -->
                        <div class="relative w-full max-w-4xl max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Daftar Servis
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                    </button>
                                </div>
                                <div class="p-6 space-y-6">
                                    <div class="relative overflow-x-auto shadow-md rounded-lg">
                                        <table class="w-full text-sm text-left text-gray-500">
                                            <thead class="text-xs text-purple uppercase bg-table-head">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">
                                                        No
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Customer Name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Plat Number
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Problem
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Tanggal & Waktu
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-xs md:text-base">
                                                {{-- @foreach ($services as $index => $service) --}}
                                                    <tr class="bg-primary border-b border-purple text-purple">
                                                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                                                            {{ $index + 1 }}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{ $service->user->name }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $service->plat_num }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $service->problem }}
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $service->plan_date }} {{ $service->time }}
                                                        </td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a href="/dealer/transaksisparepart" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Transaksi Sparepart</a>
        </div>
    </div>
</div>
<script>
    function openModal(event) {
        event.preventDefault(); // Mencegah tindakan bawaan tautan

        const modal = document.getElementById('staticModal');
        // Kode lain untuk membuka modal sesuai dengan framework JavaScript atau library yang Anda gunakan

        // Contoh menggunakan modal Bootstrap
        // $(modal).modal('show');
    }
</script>
   
@endsection
