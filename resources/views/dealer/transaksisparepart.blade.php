
@extends('dealer.header')

@section('title', 'Dealer - Data sparepart')

@section('main-content')
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 shadow-md bg-gray-100 dark:bg-secondary">
    <div class="flex justify-between">
        <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide ">Data Spareparts Bulan {{$month}}</div>
        <div class="mt-10 mb-4 w-1/2">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Service ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sparepart ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Subtotal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @php
                
                $total = 0; // Inisialisasi variabel total
                $totalsparepart = 0;
                @endphp
    
                @foreach ($carts as $index => $cart)
                @php
                $all = $cart->sparepart->price * $cart->quantity; 
                @endphp
                    <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <th scope="row" class="px-4 text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $cart->service_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cart->sparepart->item_name }} <!-- Access the name of the sparepart via the 'sparepart' relationship -->
                        </td>
                        <td class="px-6 py-4">
                            {{ $cart->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cart->sparepart->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $all }}
                            @php
                                $total += $all; // Menambahkan total ke variabel total
                                $totalsparepart += $cart->quantity;
                            @endphp
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col items-center mt-6">
        <span class="text-sm text-primary dark:text-purple">
            Total: Rp. {{ $total }} <!-- Menampilkan total harga -->
        </span>
        <span class="text-sm text-primary dark:text-purple">
            Total: {{ $totalsparepart }} Sparepart<!-- Menampilkan total harga -->
        </span>
    </div>

    <div class="flex flex-col items-center mt-6">
        <div class="mt-5 md:mt-0">
            {{ $carts->links('dealer.pagination') }}
        </div>
    </div>
</div>
@endsection
