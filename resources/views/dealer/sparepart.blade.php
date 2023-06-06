@extends('dealer.header')

@section('title', 'Delaer - Servis')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Sparepart</div>
    <form action="{{ route('sparepart.store') }}" method="post">
        <div>
            <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-black bg-purple my-6 hover:bg-purple-800 focus:ring-1 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                Tambah Sparepart
            </button>
        </div>
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
                    <form action="{{ route('sparepart.store') }}" method="post">
                        @csrf

                        <div class="mb-6 mx-6">
                            <label for="namaitem" class="block mb-2 text-sm font-medium text-purple">Nama Sparepart</label>
                            <input type="text" id="namaitem" name="namaitem" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>

                        <div class="mb-6 mx-6">
                            <label for="harga" class="block mb-2 text-sm font-medium text-purple">Harga</label>
                            <input type="text" id="harga" name="harga" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>

                        <div class="mb-6 mx-6">
                            <label for="stok" class="block mb-2 text-sm font-medium text-purple">Stok</label>
                            <input type="text" id="stok" name="stok" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>

                        <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b">
                            <button type="submit" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <form class="flex items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-2xl">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="mb-5 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="simple-search" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
        </div>
        <button type="submit" class="mb-5 p-2.5 ml-2 text-sm font-medium text-white bg-table-head rounded-lg border border-purple hover:purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>


    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-purple uppercase bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Sparepart
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok
                    </th>
                    <th scope="col" class="text-center"">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($spareparts as $sparepart)
                <tr class="bg-primary border-b border-purple last:border-none text-purple">

                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}.
                    </th>
                    <td class="px-6 py-4">
                        {{ $sparepart->namaitem}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $sparepart->harga}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $sparepart->stok}}
                    </td>
                    <td class="flex justify-around">
                        <button href="#" data-modal-target="staticModal" data-modal-toggle="staticModal" type="" class="text-primary bg-success hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Update Stok</button>
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
                                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nama Servis</label>
                                            <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                        <div class="mb-6 mx-6">
                                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Harga</label>
                                            <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                        <div class="mb-6 mx-6">
                                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Waktu</label>
                                            <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        </div>
                                    </form>

                                    <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                                        <button data-modal-hide="staticModal" type="button" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <form action="{{ route('sparepart.delete', $sparepart->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus sparepart ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Hapus</button>
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex flex-col items-center mt-6">
        <span class="text-sm text-purple">
            Showing <span class="font-semibold">1</span> to <span class="font-semibold dark:text-white">10</span> of <span class="font-semibold">100</span> Entries
        </span>
        <div class="inline-flex mt-2 xs:mt-0">
            <button class="px-4 py-2 text-sm font-medium text-purple bg-gray-800 rounded-l hover:bg-primary">
                Prev
            </button>
            <button class="px-4 py-2 text-sm font-medium text-purple bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-primary">
                Next
            </button>
        </div>
    </div>
</div>
</div>

@endsection