@extends('dealer.header')

@section('title', 'Delaer - Transaksi')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi Servis</div>
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text text-purple uppercase bg-table-head">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Customer
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ahmad Dhani
                        </th>
                        <th scope="col" class="px-6 py-3">
                            2023/05/05
                        </th>
                    </tr>
                </thead>
                <tbody class="text text-purple uppercase bg-table-head">
                    <tr>
                        <td class="px-6 py-4">
                            Kendaraan
                        </td>
                        <td class="px-6 py-4">
                            Honda Beat 
                        </td>
                        <td class="px-6 py-4">
                            N 3456 AB
                        </td>
                        
                    </tr>
                    <tr class="font-semibold">
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                    </tr>
                    <tr class="font-semibold">
                        <td class="px-6 py-4">
                            Nama Servis
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            Harga
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-6 py-4">
                            Ganti Oli
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            Rp 28.000,-
                        </td>
                    </tr>
                    <tr class="">
                        <td class="px-6 py-4">
                            Perbaikan ringan ganti kampas
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            Rp 50.000,-
                        </td>
                    </tr>
                    <tr class="font-semibold">
                        <td class="px-6 py-4">
                            Total
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            Rp 78.000,-
                        </td>
                    </tr>
                </div> 
        
</div>
    
@endsection