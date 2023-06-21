@extends('customer.header')

@section('title', 'customer - Semua Servisku')
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

<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 bg-gray-100 dark:bg-secondary shadow-lg">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    @foreach ($services as $service)
    @if($service->status=='waiting' || $service->status=='accept' || $service->status=='process' || $service->status=='repairing')
    <div class="p-4 border-1 rounded-lg md:mx-4 my-6 bg-blue-400 dark:bg-purple shadow-md"> 
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            Dealer
                        </th>
                        <th scope="col" class="text-center">
                            Kendaraan
                        </th>
                        <th scope="col" class="text-center">
                            Plat Nomor
                        </th>
                        <th scope="col" class="text-center">
                            Jadwal 
                        </th>
                        <th scope="col" class="text-center">
                            Pukul 
                        </th>
                        <th scope="col" class="text-center">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                        <tr class="bg-gray-100 dark:bg-primary border-b border-purple dark:text-purple last:border-none">
                            <td class="px-6 py-4">
                                {{ $service->dealer->dealer_name }}
                            </td>
                            <td class="text-center">
                                {{ $service->vehicle_name }}
                            </td>
                            <td class="text-center">
                                {{ $service->plat_num }}
                            </td>
                            <td class="text-center">
                                {{ $service->plan_date }}
                            </td>
                            <td class="text-center">
                                {{ $service->time }}
                            </td>
                            <td class="text-center">
                                {{ $service->status }}
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5 flex flex-col md:flex-row space-x-2">
            <a href="{{ route('customer.viewDetailService', ['id'=>$service->id])}}" class="flex text-white dark:text-primary bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-2 py-2.5 mx-5 md:mx-0">
                    Cek Detail Servis
                </a>
                @if($service->status=='accept' || $service->status=='process' || $service->status=='repairing')
                <a href="{{ route('customer.cetakhistory', [$service->id]) }}" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Print</a> 
                @endif
                @if($service->status=='waiting' || $service->status=='accept')
                <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-white dark:text-primary bg-red-700 hover:bg-red-800 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center" type="submit">
                    Batalkan Antrian 
                </button>
                <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center space-x-10">
                                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin membatalkan antrian ? </h3>
                                <form action="{{route('customer.destroyServisku', ['id'=>$service->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="flex justify-center">
                                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Ya
                                        </button>
                                </form>
                                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 mx-2">Tidak</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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