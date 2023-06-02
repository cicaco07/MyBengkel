@extends('customer.header')

@section('title', 'customer - Semua Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    {{-- <div class="text-purple m-4 font-semibold text-1xl tracking-wide">Status Servisku</div> --}}
    @foreach ($services as $service)
    <div class="p-4 border-1 rounded-lg md:mx-4 my-6 bg-purple"> 
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
        <div class="mt-5 flex flex-col md:flex-row justify-between">
            <form action="" method="POST" onsubmit="return confirm('Apakah Anda yakin membatalkan antrian ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="focus:outline-none text-primary bg-red-500 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0">Batalkan Antrian</button>
            
                <button class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0" type="button">
                    Cek Rekomendasi
                    </button>
            </form>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection