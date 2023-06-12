@extends('mechanic.header')

@section('title', 'Mekanik - Antrian')

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
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide ">Data Antrian</div>
<div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No 
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Customer
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipe Kendaraan
                </th>
                <th scope="col" class="px-6 py-3">
                    Plat Nomor
                </th>
                <th scope="col" class="px-6 py-3">
                    Problem
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="text-xs md:text-base">
            @foreach ($services as $servis)
            <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    {{ $servis->id}}
                </th>
                <td class="px-6 py-4">
                    {{ $servis->user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $servis->vehicle_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $servis->plat_num }}
                </td>
                <td class="px-6 py-4">
                    {{ $servis->problem }}
                </td>
                <td class="px-6 py-4">
                    {{ $servis->status }}
                </td>
                <td class="">
                    <a href="{{ route('mechanic.updateService', ['id'=>$servis->id])}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        Update
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex flex-col items-center mt-6">
    <div class="mt-5 md:mt-0">
        {{ $services->links('mechanic.pagination') }}
    </div>
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
