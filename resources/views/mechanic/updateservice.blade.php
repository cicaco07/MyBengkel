@extends('mechanic.header')

@section('title', 'Mekanik - Update Status')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Transaksi</div>
    <div class="relative overflow-x-auto rounded-lg">
        <table class="w-xl text-sm text-left text-gray-500">
            <tbody class="text-xs md:text-base">
                <tr class="text-primary dark:text-purple">
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
                <tr class="text-primary dark:text-purple">
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
                <tr class="text-primary dark:text-purple">
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
                <tr class="text-primary dark:text-purple">
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
                <tr class="text-primary dark:text-purple">
                    <td class="px-6 py-2">
                        Jadwal Servis
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        02-09-2023 15:00:00
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="px-6 py-2">
                        Detail Biaya Service
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mx-40">
        <table class="w-full text-sm text-left">
            <thead class="text-base">
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 text-start">Biaya Sparepart</th>
                    <td class="py-3 text-end"></td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 pl-8 text-start">Yamalube</th>
                    <td class="py-3 pl-8 text-center">2 x 50000</th>
                    <td class="py-3 text-end">100000</td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 text-start">Biaya Servis</td>
                    <td class="py-3 pl-8 text-center">1 x 20000</th>
                    <td class="py-3 text-end">20000</td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 text-start">Biaya Aplikasi</td>
                    <td class="py-3 pl-8 text-center">1 x 2000</th>
                    <td class="py-3 text-end">2000</td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <th class="py-3 text-start">Total Harga</th>
                    <td class="py-3 pl-8 text-center"></th>
                    <th class="py-3 text-end">122000</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="mx-10">
        
    </div> 
    <div class="flex justify-between mx-10 mt-10">
        <div class="ml-36">
            <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Pilih sparepart
              </button>
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-gray-100 dark:bg-primary rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 rounded-t">
                            <h3 class="text-xl font-semibold text-primary dark:text-purple">
                                Pilih sparepart
                            </h3>
                            <button type="button" class="text-purple bg-transparent hover:bg-secondary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="mx-4">
                            <table class="w-full text-sm">
                                <thead  class="text-xs md:text-base">
                                    <tr class="text-primary dark:text-purple border bg-purple dark:bg-table-head border-primary dark:border-purple uppercase">
                                        <th class="py-3 w-1/5 text-center">
                                            Nama Barang
                                        </th>
                                        <th class="py-3 w-1/5 text-center">
                                            Gambar
                                        </th>
                                        <th class="py-3 w-1/5 text-center">
                                            Jumlah
                                        </th>
                                        <th class="py-3 w-1/5 text-center">
                                            Harga
                                        </th>
                                        <th class="py-3 w-1/5 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-xs md:text-base" id="daftar-sparepart">
                                    @foreach ($sparepart as $item)
                                    <tr class="text-primary dark:text-purple border border-primary dark:border-purple">
                                        <td class="py-2 text-center">
                                            {{ $item->item_name}}
                                        </td>
                                        <td class="py-2 flex justify-center">
                                            <img src="{{ $item->image }}" alt="" class="w-32 h-24 md:w-48 md:h-32 border-2 border-primary dark:border-purple items-center">
                                        </td>
                                        <td class="py-2">
                                            <div class="flex justify-center">
                                                <input type="number" data-quantity-input class="block w-20 text-primary dark:text-purple border-2 dark:border-purple dark:bg-primary text-center" autocomplete="off" name="" id="" min="1" placeholder="0">
                                            </div>
                                        </td>
                                        <td class="py-2 text-center">
                                            {{ $item->price }}
                                        </td>
                                        <td class="py-2 text-center">
                                            <button type="submit" data-modal-hide="staticModal" data-sparepart-id="{{ $item->id }}" class="text-primary focus:outline-none bg-dark-purple hover:bg-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Tambah</button>
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
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
<script>
    // Ambil semua tombol "Tambah"
    const tambahButtons = document.querySelectorAll('[data-sparepart-id]');
  
    // Loop melalui setiap tombol "Tambah"
    tambahButtons.forEach(button => {
      button.addEventListener('click', () => {
        // Dapatkan ID sparepart dari atribut data
        const sparepartId = button.getAttribute('data-sparepart-id');
  
        // Dapatkan input jumlah yang terkait dengan tombol "Tambah" yang ditekan
        const quantityInput = document.querySelector(`[data-quantity-input][data-sparepart-id="${sparepartId}"]`);
  
        // Dapatkan nilai input jumlah
        const quantityValue = quantityInput.value;
  
        // Lakukan apa pun yang Anda inginkan dengan nilai ID sparepart dan jumlah (misalnya, tambahkan ke tabel cart)
        // ...
      });
    });
  </script>
  
@endsection