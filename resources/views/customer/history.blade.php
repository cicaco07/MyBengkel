@extends('customer.header')

@section('title', 'customer - History Servis')
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
@endif

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">History Servisku</div>
    @foreach ($services as $service)
    @if($service->status=='done')
    <div class="mb-5 w-full p-4 bg-primary border border-table-head-200 rounded-lg shadow sm:p-8 dark:bg-table-head-800 dark:border-table-head-700">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-purple dark:text-white">{{$service->plat_num}} | {{$service->vehicle_name}}</h5>
        <h4 class="text-normal text-purple">Dealer {{$service->dealer->dealer_name}} / {{$service->plan_date}}</h4>
        <br>
        <div class="w-full md:mb-30">
            <a data-modal-target="staticModal-{{$service->id}}" data-modal-toggle="staticModal-{{$service->id}}"class="text-primary bg-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Detail</a>    
            <div id="staticModal-{{$service->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Detail Transaksi
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal-{{$service->id}}">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="p-6 space-y-6">
                            <table class="w-full text-sm text-left">
                                <thead class="text-base">
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3 w-3/12">ID Service</td>
                                        <td class="py-3 text-center w-2/12">:</td>
                                        <td class="py-3 w-7/12">{{$service->id}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Nama Customer</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->user->name}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Masalah / Keluhan</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->problem}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Nomor polisi</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->plat_num}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Tipe Motor</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->vehicle_name}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Tanggal & waktu service</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->plan_date}} {{$service->time}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Rekomendasi Servis</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->recommended_service}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Total Harga</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->price}}</td>
                                    </tr>
                                    <tr class="text-primary dark:text-purple dark:border-purple">
                                        <td class="py-3">Status</td>
                                        <td class="py-3 text-center">:</td>
                                        <td class="py-3">{{$service->status}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="staticModal-{{$service->id}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="{{route('customer.cetakhistory', ['id'=>$service->id])}}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>     --}}
            <a href="{{ route('customer.cetakhistory', [$service->id]) }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a>
        </div>
    </div>
    @endif
    @endforeach
    </div>
</div>
<script>
    setTimeout(function() {
        var toastElement = document.getElementById('toast-success');
        if (toastElement) {
            toastElement.remove();
        }
    }, 3000);
</script>

@endsection