@extends('mechanic.header')

@section('title', 'Mekanik - Update Status')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Transaksi</div>
    <div class="relative overflow-x-auto rounded-lg">
        <table class="w-xl text-sm text-left text-gray-500">
            <tbody class="text-xs md:text-base">
                <tr class="text-purple">
                    <td class="px-6 py-2">
                        Id Service
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        {{ $antrian->id }}
                    </td>
                </tr>
                <tr class="text-purple">
                    <td class="px-6 py-2">
                        Jenis Motor
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        {{$antrian->vehicle_name}}
                    </td>
                </tr>
                <tr class="text-purple">
                    <td class="px-6 py-2">
                        Nama Customer
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        {{ $antrian->user->name }}
                    </td>
                </tr>
                <tr class="text-purple">
                    <td class="px-6 py-2">
                        Keluhan
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        {{ $antrian->problem }}
                    </td>
                </tr>
                <tr class="text-purple">
                    <td class="px-6 py-2">
                        Detail Service
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="ml-48">
        <table class="w-full text-sm text-left text-gray-500">
            <thead  class="text-xs md:text-base">
                <tr class="text-purple border-b border-purple">
                    <th class="py-3 text-center">
                        Nama Barang
                    </th>
                    <th class="px-6 py-3 text-center">
                        Jumlah
                    </th>
                    <th class="px-6 py-3 text-center">
                        Harga
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base" id="daftar-sparepart">
                <tr class="text-purple">
                    <td class="py-2 text-center">
                        Gear
                    </td>
                    <td class="px-6 py-2 text-center">
                        2
                    </td>
                    <td class="px-6 py-2 text-center">
                        2000
                    </td>
                </tr>
                
                
            </tbody>
        </table>
    </div> 
    <div class="flex justify-between mx-10 mt-10">
        <div class="ml-36">
            <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Pilih sparepart
              </button>
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-primary rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-purple">
                                Pilih sparepart
                            </h3>
                            <button type="button" class="text-purple bg-transparent hover:bg-secondary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="flex flex-wrap">
                            @foreach ($sparepart as $part)
                            <div class="p-6 flex  gap-4">
                                <div class="">
                                    <img src="{{ asset('/img/herta.jpg') }}" alt="" class="w-20 md:w-24 h-20 md:h-24 mb-4" data-popover-target="popover-click-{{$part->id}}" data-popover-trigger="click">
                                    <div data-popover id="popover-click-{{$part->id}}" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-purple transition-opacity duration-300 bg-table-head border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                        <div class="px-3 py-2 bg-primary border-b border-gray-200 rounded-t-lg">
                                            <h3 class="font-semibold text-purple">{{ $part->namaitem }}</h3>
                                        </div>
                                        <p class="m-2 text-purple">Sparepart yang tersedia saat ini <span class="font-semibold text-purple">{{$part->stok}}</span> buah</p>
                                        <div class="w-full bg-primary rounded-full h-2.5 mb-4 dark:bg-gray-700">
                                            <div class="bg-red-600 h-2.5 rounded-full" style="width: 55%"></div>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                    <button data-modal-hide="staticModal" data-sparepart-id="{{ $part->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                                </div>            
                            </div>
                            @endforeach
                        </div>
                        
                        {{-- <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="staticModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-hide="staticModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        
        @if($antrian->status == 'waiting')
        <form action="{{ route('mechanic.updateStatus', $antrian->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Submit</button>
        </form>
        @endif

    </div>
</div>
@endsection

{{-- 
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Antrian</div>
            <div class="text-xs md:text-lg">
                <div class="mb-6 mx-6 grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-purple dark:text-white">Nama Customer</label>
                        <input type="text" id="first_name" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->user->name}}" disabled>
                    </div>
                    <div>
                        <label for="plat_num" class="block mb-2 text-sm font-medium text-purple dark:text-white">Plat Nomor</label>
                        <input type="text" id="last_name" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->plat_num}}" disabled>
                    </div>
                    <div>
                        <label for="problem" class="block mb-2 text-sm font-medium text-purple dark:text-white">Problem</label>
                        <input type="text" id="company" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->problem}}" disabled>
                    </div>  
                    
                </div>
            
            <label for="platnum" class=" mx-6 block mb-2 text-sm font-medium text-purple">Kebutuhan Servis</label>  
            <div class="mb-6 mx-6 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-purple uppercase bg-table-head">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                Sparepart
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Stok
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Total Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sparepart as $part)
                        <tr class="bg-primary border-b border-purple text-purple last:border-none">
                            <td class="px-6 py-4 text-purple dark:text-white">
                                {{$part->namaitem}}
                            </td>
                            <td class="px-6 py-4 text-purple">
                                {{$part->harga}}
                            </td>
                            <td class="px-6 py-4 text-pruple dark:text-white">
                                {{$part->stok}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button" onclick="decrementQuantity(this)">
                                        <!-- Tombol decrement -->
                                    </button>
                                    <div>
                                        <input type="number" class="qty-input bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" value="0" min="0" onchange="calculateTotalPrice({{$loop->index}})" required data-harga="{{$part->harga}}" data-index="{{$loop->index}}">
                                    </div>
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button" onclick="incrementQuantity(this)" data-index="{{$loop->index}}">
                                        <!-- Tombol increment -->
                                    </button>
                                </div>
                            </td>
                            <td>
                                <p><span id="total-harga-{{$loop->index}}">0</span></p>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function incrementQuantity(button) {
    const input = button.parentNode.querySelector('input');
    const value = parseInt(input.value);
    input.value = value + 1;
    calculateTotalPrice(input);
}

function decrementQuantity(button) {
    const input = button.parentNode.querySelector('input');
    const value = parseInt(input.value);
    if (value > 0) {
        input.value = value - 1;
        calculateTotalPrice(input);
    }
}

function calculateTotalPrice(index) {
    const inputElement = document.querySelector(`input[data-index="${index}"]`);
    const harga = parseFloat(inputElement.getAttribute('data-harga'));
    const jumlah = parseInt(inputElement.value);
    const totalHarga = harga * jumlah;

    // Menampilkan total harga pada view
    const totalHargaElement = document.getElementById(`total-harga-${index}`);
    totalHargaElement.textContent = totalHarga;
}

</script>
 --}}
{{-- 
@endsection --}}