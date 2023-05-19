@extends('customer.header')

@section('title', 'customer - Servisku')

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
                <td>
                    <div class="text-right ">
                        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="middle m-10 rounded-lg bg-green-500 py-3 px-6 font-semibold text-xs uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:bg-violet-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true" type="button">Data Spare Part</button>
                        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-4xl max-h-full overflow-x-auto">
                                <div class="relative bg-secondary rounded-lg shadow">
                                    <div class="flex items-start justify-between p-4 rounded-t ">
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <form>
                                        <table class="w-full text-sm relative overflow-x-auto shadow-md rounded-lg">
                                            <tbody class="relative overflow-x-auto shadow-md rounded-lg text-xs md:text-base text-left">
                                                <tr class="bg-primary text-purple ">
                                                    <td class="px-6 py-4">
                                                        HONDA Alternator Assy
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Rp 1.500.000
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Sisa Stok : 8
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Telah Disetujui
                                                    </td>
                                                </tr>
                                                <tr class="bg-primary text-purple">
                                                    <td class="px-6 py-4">
                                                        AHM OIL SPX2 Honda
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Rp 500.000
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Sisa Stok : 8
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        Telah Disetujui
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <div class="text-left flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection