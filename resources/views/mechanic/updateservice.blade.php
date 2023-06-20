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
                    <td class="md:px-6 py-4">
                        Id Service
                    </td>
                    <td class="md:px-6 py-4">
                        :
                    </td>
                    <td class="md:px-6 py-4">
                        {{ $antrian->id }}
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="md:px-6 py-4">
                        Jenis Motor
                    </td>
                    <td class="md:px-6 py-4">
                        :
                    </td>
                    <td class="md:px-6 py-4">
                        {{$antrian->vehicle_name}}
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="md:px-6 py-4">
                        Nama Customer
                    </td>
                    <td class="md:px-6 py-4">
                        :
                    </td>
                    <td class="md:px-6 py-4">
                        {{ $antrian->user->name }}
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="md:px-6 py-4">
                        Keluhan
                    </td>
                    <td class="md:px-6 py-4">
                        :
                    </td>
                    <td class="md:px-6 py-4">
                        {{ $antrian->problem }}
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="md:px-6 py-2">
                        Jadwal Servis
                    </td>
                    <td class="md:px-6 py-2">
                        :
                    </td>
                    <td class="md:px-6">
                        <div class="flex items-center">
                            <form id="update-form" action="{{ route('update-waktu', ['id' => $antrian->id]) }}" method="POST" class="flex text-center">
                                @csrf
                                @method('PUT')

                                @if ($antrian->plan_date == null)
                                <div class="flex items-center">
                                    <div class="relative max-w-sm mr-4">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input id="datepicker" name="datepicker" autocomplete="off" datepicker datepicker-buttons type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>
                                @else
                                    {{$antrian->plan_date}}
                                @endif

                                @if ($antrian->time==null)
                                <button data-modal-target="timepick" data-modal-toggle="timepick" class="block text-primary focus:outline-none bg-dark-purple hover:bg-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0" type="button">
                                    Pilih waktu
                                </button>
                                <div id="timepick" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <div class="relative bg-gray-100 dark:bg-primary rounded-lg shadow">
                                                <div class="flex items-start justify-between p-4 rounded-t">
                                                    <h3 class="text-xl font-semibold text-primary dark:text-purple">
                                                        Pilih waktu
                                                    </h3>
                                                    <button type="button" class="text-purple bg-transparent hover:bg-secondary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="timepick">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                    </button>
                                                </div>
                                                <div class="mx-4">
                                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Pilih sesi</h3>
                                                    <ul class="grid w-full gap-6 md:grid-cols-3 my-8">
                                                        <li>
                                                            <input type="checkbox" id="morning" name="session" value="morning" class="hidden peer">
                                                            <label for="morning" class="inline-flex items-center justify-between w-full p-5 text-primary bg-blue-500 border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-black dark:border-gray-700 peer-checked:border-blue-600 hover:text-white dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-blue-600 dark:text-white">                           
                                                                <div class="block">
                                                                    <div class="w-full text-2xl font-semibold">Sesi Pagi</div>
                                                                </div>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="afternoon" name="session" value="afternoon" class="hidden peer">
                                                            <label for="afternoon" class="inline-flex items-center justify-between w-full p-5 text-primary bg-orange-500 border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-black dark:border-gray-700 peer-checked:border-blue-600 hover:text-white dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-orange-600 dark:text-white">
                                                                <div class="block">
                                                                    <div class="w-full text-2xl font-semibold">Sesi Siang</div>
                                                                </div>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" id="evening" name="session" value="evening" class="hidden peer">
                                                            <label for="evening" class="inline-flex items-center justify-between w-full p-5 text-primary bg-red-500 border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-black dark:border-gray-700 peer-checked:border-blue-600 hover:text-white dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-red-600 dark:text-white">
                                                                <div class="block">
                                                                    <div class="w-full text-2xl font-semibold">Sesi Sore</div>
                                                                </div>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mx-8 pb-4">
                                                    <label for="session-dropdown" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih waktu</label>
                                                    <select id="session-dropdown" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>-- Pilih waktu --</option>
                                                    </select>
                                                    <button type="submit" class="block mt-4 text-primary focus:outline-none bg-dark-purple hover:bg-purple-900 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">
                                                        Update Data
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    {{$antrian->time}}    
                                @endif
                            </form>
                        </div>                     
                    </td>
                </tr>
                <tr class="text-primary dark:text-purple">
                    <td class="md:px-6 py-4">
                        Detail Biaya Service
                    </td>
                    <td class="px-2 md:px-6 py-4">
                        :
                    </td>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mx-2 sm:mx-12 md:mx-20">
        @if ($carts->isNotEmpty())
        <table class="w-full text-sm text-left">
            <thead class="sm:text-xs md:text-base">
                <tr class="text-primary dark:text-purple border-b border-primary dark:border-purple">
                    <td class="py-3 text-center w-1/4">Nama Sparepart</td>
                    <td class="py-3 text-center w-1/4">Jumlah item</td>
                    <td class="py-3 text-center w-1/4">Subtotal</td>
                    <td class="py-3 text-center w-1/4">Action</td>
                </tr>
                @foreach ($carts as $index => $cart)
                <tr class="text-primary dark:text-purple">
                    <td class="py-3 pl-8 text-center">{{ $cart->item_name }}</td>
                    <td class="py-3 pl-8 text-center">
                        {{ $cart->quantity }}
                    </td>
                    <td class="py-3 text-center ">{{ $cart->subtotal }}</td>
                    <td class="py-3">
                        <div class="md:flex justify-around">
                            <button type="submit" data-modal-target="popup-modal-{{$cart->id}}" data-modal-toggle="popup-modal-{{$cart->id}}" class="bg-red-500 hover:bg-red-600 text-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">
                                Hapus
                            </button>
                            <div id="popup-modal-{{$cart->id}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-{{$cart->id}}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center space-x-10">
                                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin menghapus sparepart ini ? </h3>
                                            <form action="{{ route('remove-item', $cart->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="flex justify-center">
                                                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                        Ya
                                                    </button>
                                            </form>
                                            <button data-modal-hide="popup-modal-{{$antrian->id}}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 mx-2">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
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
                        </div>
                    </td>
                </tr>
                @endforeach
                <tr class="text-primary dark:text-purple">
                    <th class="py-3 text-center">Total Harga</th>
                    <td class="py-3 pl-8 text-center"></th>
                    <th class="py-3 text-center">Rp {{ $total }}</th>
                </tr>
                
            </thead>
        </table>
        @else
        <div class=""></div>
        @endif
    </div>
    <div class="flex md:mx-10 justify-around items-center">
        <div class="">
            <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Pilih sparepart
            </button>
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-gray-100 dark:bg-secondary rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 rounded-t">
                            <h3 class="text-xl font-semibold text-primary dark:text-purple">
                                Pilih sparepart
                            </h3>
                            <button type="button" class="text-purple bg-transparent hover:bg-secondary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="relative overflow-x-auto shadow-md rounded-lg mx-4">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                                    <tr>
                                        <th scope="col" class="py-4 text-center">
                                            Id
                                        </th>
                                        <th scope="col" class="text-center">
                                            Nama Barang
                                        </th>
                                        <th scope="col" class="text-center">
                                            Gambar
                                        </th>
                                        <th scope="col" class="text-center">
                                            Jumlah
                                        </th>
                                        <th scope="col" class="text-center">
                                            Harga
                                        </th>
                                        <th scope="col" class="text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                    <tbody class="text-xs md:text-base">
                                        @foreach ($sparepart as $index => $item)
                                        <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                                            <td scope="row" class="px-4 text-center py-4 font-medium whitespace-nowrap dark:text-white">
                                                {{ $index+ 1}}
                                            </td>
                                            <td class="text-center">
                                                {{ $item->item_name}}
                                            </td>
                                            <td class="flex justify-center my-2">
                                                <img src="{{ $item->image }}" alt="" class="w-32 h-24 md:w-48 md:h-32 border-2 border-primary dark:border-purple items-center">
                                            </td>
                                            <form action="{{ route('mechanic.cart') }}" method="POST">
                                                @csrf
                                            <td class="text-center">
                                                <div class="flex justify-center">
                                                    <input type="number" class="block w-12 md:w-20 text-primary dark:text-purple border-2 dark:border-purple dark:bg-primary text-center" autocomplete="off" name="quantity" min="1" max="9" placeholder="0">
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
        <div class="">
            @if ($antrian->recommended_service == '')
            <button data-modal-target="staticModal1" data-modal-toggle="staticModal1" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Rekomendasi
            </button>
            <div id="staticModal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-secondary">
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
            @endif
        </div>
        
        <div class="">
            <button type="submit" data-modal-target="popup-modal-{{$antrian->id}}" data-modal-toggle="popup-modal-{{$antrian->id}}" class="bg-red-500 hover:bg-red-600 text-primary font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0 text-center" type="submit">
                Hapus Semua
            </button>
            <div id="popup-modal-{{$antrian->id}}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal-{{$antrian->id}}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center space-x-10">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin menghapus sparepart ini ? </h3>
                            <form action="{{ route('clear-cart', $antrian->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="flex justify-center">
                                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Ya
                                    </button>
                            </form>
                            <button data-modal-hide="popup-modal-{{$antrian->id}}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 mx-2">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
{{-- ?????? --}}
<div class="flex sm:mx-10 md:mx-44 justify-between items-center">
    <div class="">
        <a href="{{route('mechanic.antrian')}}" class="">
            <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Kembali</button>
        </a>
    </div>
    <div class="">
        @if($antrian->status == 'waiting')
            <form action="{{ route('mechanic.updateStatus', ['id' => $antrian->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="price" value="{{$total}}">
                <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">Submit</button>
            </form>
        @endif
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

    const checkboxes = document.querySelectorAll('input[name="session"]');
    const dropdown = document.getElementById('session-dropdown');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                const selectedSession = this.value;
                dropdown.innerHTML = '<option>-- Pilih waktu --</option>';
                
                if (selectedSession === 'morning') {
                    addOptions([' 07:30', ' 08:15', ' 09:15', ' 10:00']);
                } else if (selectedSession === 'afternoon') {
                    addOptions([' 11:30', ' 13:00', ' 13:45', ' 14:45']);
                } else if (selectedSession === 'evening') {
                    addOptions([' 15:30', ' 16:45', ' 18:15', ' 19:30']);
                }
            }
        });
    });

    function addOptions(options) {
        options.forEach(option => {
            const selectedOption = document.createElement('option');
            selectedOption.text = option;
            dropdown.add(selectedOption);
        });
    }

</script>
@endsection