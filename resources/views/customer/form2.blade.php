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
            <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="middle none center w-full rounded-lg bg-green-500 py-3 px-6 font-semibold text-xs uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:bg-violet-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true" type="button">Register Now !</button>
            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-secondary rounded-lg shadow">
                        <div class="flex items-start justify-between p-4 rounded-t ">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <form>
                            <div class="mb-6 mx-6">
                                <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Jenis Motor</label>
                                <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                            <div class="mb-6 mx-6">
                                <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nomor Polisi</label>
                                <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                            <div class="mb-6 mx-6">
                                <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Keluhan</label>
                                <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </form>

                        <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                            <button data-modal-hide="staticModal" type="button" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection