@extends('mechanic.header')

@section('title', 'Mekanik - Profilku')

@section('main-content')
@if(session('success'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-success rounded-lg shadow" role="alert" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-100 p-1.5 inline-flex h-8 w-8 text-green-500 hover:text-green-500 bg-green-100 hover:bg-green-300" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div> 
@elseif(session('error1'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
    <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-red-500 rounded-lg shadow" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="mx-3 text-sm font-normal">{{ session('error1')}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-200 text-red-400 hover:text-red-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-red-300 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    </div>
@elseif(session('error'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
    <div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-primary bg-warning rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="mx-3 text-sm font-normal">{{ session('error')}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-yellow-300 hover:text-yellow-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-yellow-400 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    </div>
@endif
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 bg-gray-100 dark:bg-secondary shadow-lg">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Profilku</div>
    <div class="flex items-center justify-center mt-4">
        @if ($user->avatar)
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" class="rounded-full w-36 md:w-48 h-36 md:h-48 mb-8">
        @else
            <img class="rounded-full w-36 md:w-48 h-36 md:h-48 mb-8" src="{{ asset('img/default user.png' . $user->avatar) }}">
        @endif
    </div>
    <div class="text-xs md:text-lg md:px-10">
        <label for="name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama Mekanik</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->name }}" disabled>
        
        <label for="username" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->address }}" disabled>
    
        <label for="username" class="block mb-2 text-sm font-medium text-primary dark:text-purple">No Telepon</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->phone_number }}" disabled>

        <label for="username" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Email</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->email }}" disabled>
    </div>

    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 md:mx-8 my-6 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-5 py-2.5 text-center" type="button">
        Ubah Data
    </button>
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-gray-100 dark:bg-secondary rounded-lg shadow">
                <div class="flex items-start justify-between p-4 rounded-t ">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-center">
                    @if ($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" class="rounded-full w-32 h-32 mb-8">
                    @else
                        <img class="rounded-full w-32 h-32 bg-white mb-8" src="{{ asset('img/default user.png' . $user->avatar) }}">
                    @endif
                    
                </div>
                <form id="editProfileForm" action="{{ route('mechanic.update', $user->id_user)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-6 mx-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->name }}">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="address" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat</label>
                        <input type="text" id="address" name="address" value="{{ auth()->user()->address }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->address }}">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-primary dark:text-purple">No Telepon</label>
                        <input type="text" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->phone_number }}">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Email</label>
                        <input type="text" id="email" name="email" value="{{ auth()->user()->email }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->email }}">
                    </div>
                    <div class="mb-2 mx-6">
                        <label class="block mb-2 text-sm font-medium text-primary dark:text-purple" for="image">Avatar</label>
                        <input class="block w-full mb-5 text-sm text-primary dark:text-purple rounded-lg cursor-pointer bg-gray-100 dark:bg-primary border border-primary dark:border-none" id="avatar" type="file" name="avatar" value="{{auth()->user()->avatar}}">
                    </div>
                    <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                        <button data-modal-hide="staticModal" type="submit" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        var toastElements = document.querySelectorAll('#toast-success, #toast-warning, #toast-danger');
        toastElements.forEach(function(element) {
            if (element) {
                element.remove();
            }
        });
    }, 3000);
</script>

@endsection