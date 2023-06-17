@extends('mechanic.header')

@section('title', 'Mekanik - Servisku')

@section('main-content')
<div class="p-4 border border-purple mt-14 dark:border-none shadow-md rounded-lg bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">List Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Customer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Plat Nomor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipe motor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Problem
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
            @foreach ($services as $servis)
                @if ($servis->status=='process'||$servis->status=='repairing')
                <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                    <th scope="row" class="text-center py-4 font-medium whitespace-nowrap dark:text-white">
                        {{ $servis->id}}
                    </th>
                    <td class="text-center py-4">
                        {{ $servis->user->name }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->plat_num }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->vehicle_name }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->problem }}
                    </td>
                    <td class="">
                        <div class="flex justify-around text-center">
                            @if ($servis->status=='process')
                            <form action="{{route('mechanic.updateStatus2', $servis->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="text-primary bg-warning px-6 py-2 rounded-lg" type="submit">Start</button>
                            </form>
                            @elseif($servis->status=='repairing')
                                <button class="text-primary bg-warning px-6 py-2 rounded-lg" disabled type="submit">Processing</button>
                                <form action="{{route('mechanic.updateStatus3', $servis->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="text-primary bg-success hover:bg-green-400 px-6 py-2 rounded-lg" type="submit">Finish</button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="p-4 border border-purple dark:border-none shadow-md rounded-lg mt-6 bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">List History Servis</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Customer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Plat Nomor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipe motor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Problem
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($services as $servis)
                    @if ($servis->status=='done')
                    <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <th scope="row" class="text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $servis->id}}
                        </th>
                        <td class="text-center py-4">
                            {{ $servis->user->name }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->plat_num }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->vehicle_name }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->problem }}
                        </td>
                        <td class="">
                            <div class="flex justify-center text-center">
                                <button data-modal-target="staticModal-{{$servis->id}}" data-modal-toggle="staticModal-{{$servis->id}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Detail
                                </button>
                                <div id="staticModal-{{$servis->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-4xl max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Detail transaksi
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal-{{$servis->id}}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                            </div>
                                            <div class="p-6 space-y-6">
                                                <table class="w-full text-sm text-left">
                                                    <thead class="text-base">
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3 w-3/12">ID Service</td>
                                                            <td class="py-3 text-center w-2/12">:</td>
                                                            <td class="py-3 w-7/12">{{$servis->id}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Nama Customer</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->user->name}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Masalah / Keluhan</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->problem}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Nomor polisi</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->plat_num}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Tipe Motor</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->vehicle_name}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Tanggal & waktu service</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->plan_date}} {{$servis->time}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Rekomendasi Servis</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->recommended_service}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Total Harga</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->price}}</td>
                                                        </tr>
                                                        <tr class="text-primary dark:text-purple dark:border-purple">
                                                            <td class="py-3">Status</td>
                                                            <td class="py-3 text-center">:</td>
                                                            <td class="py-3">{{$servis->status}}</td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <button data-modal-hide="staticModal-{{$servis->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
        </table>
    </div>

</div>






@endsection