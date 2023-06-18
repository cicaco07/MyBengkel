@extends('dealer.header')

@section('title', 'Dealer - Data Pegawai')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple mx-8 my-4 font-semibold text-2xl tracking-wide">Data Pegawai</div>
    {{-- <div>
        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 mx-7 my-6 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Tambah Pegawai
        </button>
    </div> --}}
    @foreach ($users as $user) 
    <div id="staticModal-{{ $user->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-secondary rounded-lg shadow">
                <div class="flex items-start justify-between p-4 rounded-t ">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal-{{ $user->id }}">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form action="{{ route('dealer.updateMekanik', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- <form> --}}
                    {{-- <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nama</label>
                        <input type="text" id="default-input" value="{{ $user->name }}" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div> --}}
                    <div class="mb-2 mx-6">
                        <label for="position" class="block mb-2 text-sm font-medium text-purple">Jabatan</label>
                        <select type="text" name="position" id="position" value="{{$user->mechanic->position }}" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="Kepala Mekanik">Kepala Mekanik</option>
                            <option value="Mekanik">Mekanik</option>
                        </select>
                        </div>
                    {{-- <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Alamat</label>
                        <input type="text" id="default-input" value="{{ $user->address }}" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div> --}}
                    {{-- <div class="mb-6 mx-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-purple">No Telepon</label>
                        <input type="text" id="default-input" value="{{ $user->phone_number }}" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div> --}}
                    <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b">
                        <button data-modal-hide="staticModal-{{ $user->id }}" type="submit" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </form>
                {{-- <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b">
                    <button data-modal-hide="staticModal-{{ $user->id }}" type="submit" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </div> --}}
            </div>
        </div>
    </div>
    

    <div class="grid grid-flow-col gap-1 ">
        <div class="mx-4 my-4 max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('img/Mekanik.jpg')}}" alt="" />
            </a>
            <div class="px-6 py-4">
                <a href="#">
                    <h5 class="text-base font-bold tracking-tight text-gray-900 dark:text-white">{{ $user->name }}</h5>
                </a>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $user->mechanic->position }}</p><br>
                <div class="flex gap-4 ">
                    
                    <a data-modal-target="staticModal-{{ $user->id }}" data-modal-toggle="staticModal-{{ $user->id }}"  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Edit
                    </a>
                        <button type="submit" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0" type="submit">
                            Hapus Data
                        </button>
                        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                <div class="p-6 text-center space-x-10">
                                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus data sparepart ini ? </h3>
                                    <form action="{{ route('dealer.deleteMekanik', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="flex justify-center">
                                            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                 Ya
                                            </button>
                                    </form>
                                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 mx-2">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endforeach
@endsection
