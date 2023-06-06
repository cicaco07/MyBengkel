@extends('dealer.header')

@section('title', 'Dealer - Data Pegawai')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple mx-8 my-4 font-semibold text-2xl tracking-wide">Data Pegawai</div>
        <div>
        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 mx-7 my-6 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Tambah Pegawai
        </button>
    </div>
    
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-secondary rounded-lg shadow">
                <div class="flex items-start justify-between p-4 rounded-t ">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
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
                        <div class="mb-2 mx-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Jabatan</label>
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
                    </form>
                
                <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                    <button data-modal-hide="staticModal" type="button" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    
<div class="flex border-1 rounded-lg bg-secondary grid grid-cols-2 md:grid-cols-4 gap-4">
@foreach ($users as $user)
    <div class="mx-8 my-4 max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('img/Mekanik.jpg')}}" alt="" />
        </a>
        
        <div class="px-6 py-4">
            <a href="#">
                <h5 class=" text-base font-bold tracking-tight text-gray-900 dark:text-white">{{ $user->name}}</h5>
            </a>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $user->mechanic->position}}</p><br>
            <a data-modal-target="staticModal" data-modal-toggle="staticModal" href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Edit
            </a>
            <a href="#" class="hover:bg-yellow-500 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Hapus
            </a>
            
        </div>
        
    </div>   
@endforeach 
    
</div>


</div>
@endsection