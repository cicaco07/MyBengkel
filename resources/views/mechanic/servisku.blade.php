@extends('mechanic.header')

@section('title', 'Mekanik - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Aryo Deva Saputra
                    </td>
                    <td class="px-6 py-4 text-end">
                        N 3120 LU
                    </td>    
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Bryan Tosin Saputro
                    </td>
                    <td class="px-6 py-4 text-end">
                        L 3192 XS
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Desy Ayurianti
                    </td>
                    <td class="px-6 py-4 text-end">
                        AG 2131 C
                    </td> 
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center md:text-start md:mx-20 my-6">
        <a href="#" class="mr-4 text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Antrian Selesai</a>
        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Data Spare Part</a>    
    </div>
</div>
<div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">List Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        N 3120 LU
                    </td>
                    <td class="px-1 md:px-6 py-4 text-center">
                        Yamaha Matic Mio
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">00:10:00</a>
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Start</a>    
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Finish</a>    
                    </td>
                    
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        N 3120 LU
                    </td>
                    <td class="px-1 md:px-6 py-4 text-center">
                        Yamaha Matic Mio
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">00:10:00</a>
                    </td>
                    <td  class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Start</a>    
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        N 3120 LU
                    </td>
                    <td class="px-1 md:px-6 py-4 text-center">
                        Yamaha Matic Mio
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">00:10:00</a>
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Start</a>    
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection