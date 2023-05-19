@extends('customer.header')

@section('title', 'user - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Detail Dealer</div>
    <div class="text-purple m-4 font-semibold text-1xl tracking-wide">Dealer Dwimitra Malang</div>
    <div class="text-center md:text-start md:mx-4 my-6">
        <a href="#" class="mr-4 text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Detail</a>
        <a href="#" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:bg-blue-800 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Selesai</a>    
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
            </tbody>
        </table>
        <div class="flex items-center ">
        <button class="middle none center w-full rounded-lg bg-warning py-3 px-6 font-semibold text-xs uppercase text-black shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:bg-violet-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"data-ripple-light="true"> Register Now !</button>
        </div>
    </div>
</div>
@endsection