@extends('mechanic.header')

@section('title', 'Mekanik - Update Status')

@section('main-content')
@if(session('success'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-success rounded-lg shadow" role="alert" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-100 p-1.5 inline-flex h-8 w-8 text-green-500 hover:text-green-500 bg-green-100 hover:bg-green-300" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @elseif(session('error'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
    <div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-primary bg-warning rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="mx-3 text-sm font-normal">{{ session('error')}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-yellow-300 hover:text-yellow-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-yellow-400 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    </div>
    @endif
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
    <div class="mx-28">
        <table class="w-full text-sm text-left">
            <thead class="text-base">
                <tr class="text-primary dark:text-purple border-b border-primary dark:border-purple">
                    <td class="py-3 text-center w-1/4">Biaya Sparepart</th>
                    <td class="py-3 text-center w-1/4">Jumlah item</td>
                    <td class="py-3 text-center w-1/4">Subtotal</td>
                    <td class="py-3 text-center w-1/4">Action</td>

                </tr>
                @foreach ($carts as $index => $cart)
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 pl-8 text-center w-3/8">{{ $cart->item_name }}</td>
                    <td class="py-3 pl-8 text-center w-2/8">
                        {{ $cart->quantity }}
                    </td>
                    <td class="py-3 text-center w-3/8">{{ $cart->subtotal }}</td>
                    <td class="py-3 flex justify-around">
                        <form action="{{ route('remove-item', $cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hapus</button>
                        </form>
                        <button data-modal-target="staticModal-{{$cart->sparepart_id}}" data-modal-toggle="staticModal-{{$cart->sparepart_id}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                            Update
                          </button>
                        <div id="staticModal-{{$cart->sparepart_id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-4xl max-h-full">
                                <div class="relative pb-6 bg-gray-100 dark:bg-primary rounded-lg shadow">
                                    <div class="flex items-start justify-between p-4 rounded-t">
                                        <h3 class="text-xl font-semibold text-primary dark:text-purple">
                                            Update Sparepart
                                        </h3>
                                        <button type="button" class="hover:text-primary text-purple bg-transparent hover:bg-gray-300 dark:hover:bg-secondary rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:text-white" data-modal-hide="staticModal-{{$cart->sparepart_id}}">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                        </button>
                                    </div>
                                    <div class="mx-4">
                                        <table class="w-full text-sm">
                                            <thead  class="text-xs md:text-base">
                                                <tr class="text-primary dark:text-purple border bg-purple dark:bg-table-head border-primary dark:border-purple uppercase">
                                                    <th class="py-3 w-1/12 text-center">Id</th>
                                                    <th class="py-3 w-2/12 text-center">Nama Barang</th>
                                                    <th class="py-3 w-2/12 text-center">Jumlah</th>
                                                    <th class="py-3 w-2/12 text-center">Subtotal</th>
                                                    <th class="py-3 w-3/12 text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-xs md:text-base">
                                                <form action="{{ route('update-quantity', $cart->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <tr class="text-primary dark:text-purple border border-primary dark:border-purple">
                                                        <td class="py-2 text-center">{{ $cart->sparepart_id }}</td>
                                                        <td class="py-2 text-center">{{ $cart->item_name }}</td>
                                                        <td class="py-2 text-center">
                                                            <div class="flex justify-center">
                                                                <input type="number" name="quantity" id="quantity" value="{{$cart->quantity}}" max="9" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-center text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-20 p-2.5">
                                                            </div>
                                                        </td>
                                                        <td class="py-2 text-center">{{ $cart->subtotal }}</td>
                                                        <td class="py-2 text-center">
                                                            <button type="submit" class="text-primary focus:outline-none bg-dark-purple hover:bg-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Tambah</button>
                                                        </td>
                                                    </tr>
                                                </form>
                                            </tbody>                                  
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 text-center">Biaya Servis</td>
                    <td class="py-3 pl-8 text-center"></th>
                    <td class="py-3 text-center">20000</td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 text-center">Biaya Aplikasi</td>
                    <td class="py-3 pl-8 text-center"></th>
                    <td class="py-3 text-center">2000</td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <th class="py-3 text-center">Total Harga</th>
                    <td class="py-3 pl-8 text-center"></th>
                    <th class="py-3 text-center">Rp {{ $total }}</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="mx-10">
        
    </div> 
    <div class="flex justify-around mx-10 mt-10">
        <div class="">
            <a href="{{route('mechanic.antrian')}}" class="">
                <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Kembali</button>
            </a>
        </div>
        <div class="flex items-center">
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
                                        <th class="py-3 w-1/12 text-center">
                                            Id
                                        </th>
                                        <th class="py-3 w-2/12 text-center">
                                            Nama Barang
                                        </th>
                                        <th class="py-3 w-3/12 text-center">
                                            Gambar
                                        </th>
                                        <th class="py-3 w-2/12 text-center">
                                            Jumlah
                                        </th>
                                        <th class="py-3 w-2/12 text-center">
                                            Harga
                                        </th>
                                        <th class="py-3 w-3/12 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody class="text-xs md:text-base">
                                        @foreach ($sparepart as $item)
                                        <tr class="text-primary dark:text-purple border border-primary dark:border-purple">
                                            <td class="py-2 text-center">
                                                {{ $item->id}}
                                            </td>
                                            <td class="py-2 text-center">
                                                {{ $item->item_name}}
                                            </td>
                                            <td class="py-2 flex justify-center">
                                                <img src="{{ $item->image }}" alt="" class="w-32 h-24 md:w-48 md:h-32 border-2 border-primary dark:border-purple items-center">
                                            </td>
                                            <form action="{{ route('mechanic.cart') }}" method="POST">
                                                @csrf
                                            <td class="py-2">
                                                <div class="flex justify-center">
                                                    <input type="number" class="block w-20 text-primary dark:text-purple border-2 dark:border-purple dark:bg-primary text-center" autocomplete="off" name="quantity" min="1" max="9" placeholder="0">
                                                </div>
                                            </td>
                                            <td class="py-2 text-center">
                                                {{ $item->price }}
                                            </td>
                                            <td class="py-2 text-center">
                                                <input type="hidden" name="service_id" value="{{ $antrian->id }}">
                                                <input type="hidden" name="sparepart_id[]" value="{{ $item->id }}">
                                                <button type="submit" class="text-primary focus:outline-none bg-dark-purple hover:bg-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Tambah</button>
                                            </td>
                                        </form>
                                        </tr> 
                                        @endforeach
                                    </tbody>                                  
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($antrian->recommended_service == '')
        <div class="flex items-center">
            <button data-modal-target="staticModal1" data-modal-toggle="staticModal1" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Rekomendasi
            </button>
            <div id="staticModal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-gray-100 dark:bg-primary rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 rounded-t">
                            <h3 class="text-xl font-semibold text-primary dark:text-purple">
                                Rekomendasi
                            </h3>
                            <button type="button" class="text-purple bg-transparent hover:bg-secondary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <form action="{{ route('mechanic.giveRecom', $antrian->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mx-4 pb-6">           
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                                <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        <div class="">
            @if($antrian->status == 'waiting')
                <form action="{{ route('mechanic.updateStatus', ['id' => $antrian->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="update_price" value="{{$total}}">
                    <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Submit</button>
                </form>
            @endif
        </div>
        
        
        <div class="flex items-center">
            <form action="{{ route('clear-cart', $antrian->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hapus Semua Item</button>
            </form>
        </div>

    </div>
</div>

<script>
    setTimeout(function() {
        var toastElements = document.querySelectorAll('#toast-success, #toast-warning, #toast-danger');
        toastElements.forEach(function(element) {
            if (element) {
                element.remove();
            }
        });
    }, 3000);
</script>
@endsection