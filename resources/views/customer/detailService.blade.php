@extends('customer.header')

@section('title', 'Customer - Cek Detail Servis')

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
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Detail Servis</div>
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
                        {{ $service->id}}
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
                        {{ $service->vehicle_name}}
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
                        {{ $service->user->name}}
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
                        {{ $service->problem}}
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
                        Rekomendasi Service
                    </td>
                    <td class="px-6 py-2">
                        :
                    </td>
                    <td class="px-6 py-2">
                        {{ $service->recommended_service}}
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
                    <td class="py-3 text-center w-1/4">Sparepart</th>
                    <td class="py-3 text-center w-1/4">Jumlah item</td>
                    <td class="py-3 text-center w-1/4">Subtotal</td>
                    
                    @foreach ($spareparts as $sparepart)
                    <tr class="text-primary dark:text-purple">
                        <td class="py-3 pl-8 text-center w-3/8">{{ $sparepart->item_name }}</td>
                        <td class="py-3 pl-8 text-center w-2/8">
                            {{ $sparepart->pivot->quantity }}
                        </td>
                        <td class="py-3 text-center w-3/8">Rp {{ $sparepart->pivot->subtotal }},-</td>
                    </tr>
                    @endforeach
                
                </tr>
                <tr class="text-primary dark:text-purple border-b border-primary dark:border-purple">
                    <tr class="text-primary dark:text-purple">
                        <td class="py-3">Biaya Servis</td>
                        <td class="py-3 pl-8 text-center"></th>
                        <td class="py-3 text-center">Rp 20000,-</td>
                    </tr>
                    <tr class="text-primary dark:text-purple">
                        <td class="py-3">Biaya Aplikasi</td>
                        <td class="py-3 pl-8 text-center"></th>
                        <td class="py-3 text-center">Rp 2000,-</td>
                    </tr>
                    <tr class="text-primary dark:text-purple">
                        <th class="py-3">Total Harga</th>
                        <td class="py-3 pl-8 text-center"></th>
                        <th class="py-3 text-center">Rp {{ $service->price}},-</th>
                    </tr>
                </tr>
            </thead>
            
        </table>
        <div class="">
            @if($service->status == 'accept')
                <form action="{{ route('customer.updateStatus', $service->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="price" value="">
                    <button type="submit" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0">
                        Terima Rekomendasi Service
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection