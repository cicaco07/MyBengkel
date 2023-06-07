@extends('customer.header')

@section('title', 'customer - Semua Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    {{-- <div class="text-purple m-4 font-semibold text-1xl tracking-wide">Status Servisku</div> --}}
    @foreach ($services as $service)
    <div class="p-4 border-1 rounded-lg md:mx-4 my-6 bg-purple"> 
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full rounded-lg text-sm text-left text-gray-500 ">
                <thead class="text-xs text-purple uppercase bg-table-head">
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
                            Antrian
                        </th>
                        <th scope="col" class="text-center">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-base">
                        <tr class="bg-primary border-b border-purple text-purple last:border-none">
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
                                {{ $service->plan_data }}</td>
                            <td class="text-center">
                                {{ $service->status }}
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
            <div class="mt-5 flex flex-col md:flex-row space-x-2">
                <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-primary bg-red-500 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0" type="submit">
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
                <button class="flex text-primary bg-dark-purple hover:bg-violet-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-2 py-2.5 mx-5 md:mx-0" type="button">
                    Cek Rekomendasi
                </button>
            </div>
    </div>
    @endforeach
    </div>
</div>

@endsection