@extends('customer.header')

@section('title', 'customer - Servisku')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Detail Dealer</div>
    <div class="text-purple m-4 font-semibold text-1xl tracking-wide">{{ $dealer->dealer_name}}</div>
    <div class="text-center md:text-start md:mx-4 my-6">
        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="text-primary bg-warning hover:bg-yellow-500 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0" type="button">
        Mengantri
        </button>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative p-4 bg-secondary rounded-lg shadow sm:p-5">
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                    <h3 class="text-lg font-semibold text-purple">
                        Tambah Antrian
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('customer.createService')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <div class="mb-6 mx-2">
                            <label for="vehicle_name" class="block mb-2 text-sm font-medium text-purple">Jenis Motor</label>
                            <input type="text" id="vehicle_name" name="vehicle_name" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6 mx-2">
                            <label for="plat_num" class="block mb-2 text-sm font-medium text-purple">Nomor Polisi</label>
                            <input type="text" id="plat_num" name="plat_num" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6 mx-2">
                            <label for="problem" class="block mb-2 text-sm font-medium text-purple">Keluhan</label>
                            <select id="problem" name="problem" class="bg-primary text-purple text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="gantioli">Ganti Oli</option>
                                <option value="gantiban" >Ganti Ban</option>
                                <option value="servisrutin" >Servis Rutin</option>
                                <option value="servisrutin" >Lain-lain</Lain-lain></option>
                            </select>
                            
                        </div>
                    </div>
                    <button type="submit" class="text-primary inline-flex items-center bg-success hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Kirim Antrian
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Alamat
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->dealer_address}}
                    </td>    
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        No.Telepon
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{$dealer->user->phone_number}}
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Perusahaan
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->company}}
                    </td> 
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <thead class="text-xs text-purple uppercase bg-table-head">
                <tr class="yellow-300 px-1 md:px-6 py-4 text-center">
                    <th scope="col" class="px-6 py-4 ">
                        Plat Nomor
                    </th>
                    <th scope="col" class="text-center">
                        Antrian
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($services as $data)
                    <tr class="bg-primary border-b border-purple text-purple last:border-none">
                        <th scope="row" class="px-6 py-4 font-medium ">
                            {{ $data->plat_num }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium">
                            {{ $data->plan_date }}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col items-center mt-6">
        <div class="my-4">
            {{ $services->links('customer.pagination') }}
        </div>
    </div>
</div>
@endsection