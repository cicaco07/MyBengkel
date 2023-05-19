@extends('user.header')

@section('title', 'User - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Jenis Motor
                    </td>
                    <td class="px-6 py-4 text-end">
                        Honda Beat
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Nomor Polisi
                    </td>
                    <td class="px-6 py-4 text-end">
                        L 3192 XS
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="p-3 border-1 rounded-lg mt-3 bg-secondary">
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        Perbaikan Berat
                    </td>
                    <td class="px-1 md:px-6 py-4 text-center">
                    HONDA Alternator Assy
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">01:13:42</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <table class=" w-full text-sm mt-5 ">
        <tbody class="text-xs md:text-base">
            <tr class="bg-secondary text-purple">
                <td class="text-left">
                    <a href="#" class="text-primary m-20 bg-warning hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Batalkan Antrian</a>
                </td>
                <td class="text-right">
                    <a href="#" class="text-primary m-20 bg-success hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Data SparePart</a>
                </td>

            </tr>
        </tbody>
    </table>
</div>
@endsection