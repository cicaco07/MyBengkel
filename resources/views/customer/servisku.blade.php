@extends('user.header')

@section('title', 'user - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Detail Dealer</div>
    <div class="text-purple m-4 font-semibold text-1xl tracking-wide">Dealer Dwimitra Malang</div>
    <div class="text-center md:text-start md:mx-4 my-6">
        <a href="#" class="mr-4 text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Detail</a>
        <a href="#" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Mengantri</a>    
    </div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Alamat
                    </td>
                    <td class="px-6 py-4 text-end">
                        Jl. Arif Margono No. 45, Malang
                    </td>    
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        No.Telepon
                    </td>
                    <td class="px-6 py-4 text-end">
                        08978557643
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Perusahaan
                    </td>
                    <td class="px-6 py-4 text-end">
                        Suzuki
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
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-primary">
                    <td class="text-gray-100 bg-gray-700 px-1 md:px-6 py-4 text-center">
                        Nomor Polisi
                    </td>
                    <td class="bg-yellow-300 px-1 md:px-6 py-4 text-center">
                        Yamaha Matic Mio
                    </td>
                </tr>
                <tr class="bg-primary text-primary">
                    <td class="text-gray-100 bg-gray-500 px-1 md:px-6 py-4 text-center">
                        Lama Antrian
                    </td>
                    <td class="bg-yellow-100 px-1 md:px-6 py-4 text-center">
                        10 : 00 : 00
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection