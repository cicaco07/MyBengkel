@extends('dealer.header')

@section('title', 'Delaer - Data Servis')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="flex justify-between">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide w-1/2">Data Transaksi Bulan {{$month}}</div>
        <div class="mt-10 mb-4 w-1/2">
        </div>
    </div>
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
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @php
                $total = 0; // Inisialisasi variabel total
                @endphp
    
                @foreach ($services as $index => $service)
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
                            {{ $service->price }}
                            @php
                                $total += $service->price; // Menambahkan harga ke total
                            @endphp
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->plan_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->time }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col items-center mt-6">
        <span class="text-sm text-purple">
            Total: Rp. {{ $total }} <!-- Menampilkan total harga -->
        </span>
    </div>

<div class="flex flex-col items-center mt-6">
        <div class="mt-5 md:mt-0">
            {{ $services->links('mechanic.pagination') }}
        </div>
    </div>

</div>
@endsection