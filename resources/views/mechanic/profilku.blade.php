@extends('mechanic.header')

@section('title', 'Mekanik - Profilku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Profilku</div>
    <div class="flex items-center justify-center">
        <img class="rounded-full w-36 md:w-48 h-36 md:h-48 bg-white mb-8" src="{{ asset('img/herta.jpg')}}">
    </div>
    <div class="text-xs md:text-lg">
        <div class="text-purple md:mx-8 my-4 flex ">
            <span class="w-4/12 md:w-1/6">Nama Mekanik</span>
            <span class="w-1/12 md:w-1/6 text-center">:</span>
            <span class="w-7/12 md:w-4/6">Aryo Deva Saputra</span>
        </div>
        <div class="text-purple md:mx-8 my-4 flex">
            <span class="w-4/12 md:w-1/6">Alamat</span>
            <span class="w-1/12 md:w-1/6 text-center">:</span>
            <span class="w-7/12 md:w-4/6">Jl. Kenangan No. 15, Kelurahan Cibaduyut, Kecamatan Bandung Wetan, Kota Bandung</span>
        </div>
        <div class="text-purple md:mx-8 my-4 flex">
            <span class="w-4/12 md:w-1/6">No Telepon</span>
            <span class="w-1/12 md:w-1/6 text-center">:</span>
            <span class="w-7/12 md:w-4/6">089123123178</span>
        </div>
        <div class="text-purple md:mx-8 my-4 flex">
            <span class="w-4/12 md:w-1/6">Username</span>
            <span class="w-1/12 md:w-1/6 text-center">:</span>
            <span class="w-7/12 md:w-4/6">cicaco07</span>
        </div>
    </div>

    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 md:mx-8 my-6 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-5 py-2.5 text-center" type="button">
        Ubah Data
    </button>
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
                <div class="flex items-center justify-center">
                    <img class="rounded-full w-32 h-32 bg-white mb-8" src="{{ asset('img/herta.jpg')}}">
                </div>
                <form>
                    <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nama</label>
                        <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Alamat</label>
                        <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">No Telepon</label>
                        <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-2 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Username</label>
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
@endsection