@extends('layouts.header')

@section('title', 'Register')

@section('content')
@if ($errors->any())
    <div id="toast-warning" class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
        <div class="flex items-center w-full max-w-xs p-4 text-primary bg-warning rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Warning icon</span>
            </div>
            <div class="mx-3 text-sm font-normal">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="list-none">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-yellow-300 hover:text-yellow-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-yellow-400 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </div>
@endif
<div class="top-12 right-12 fixed">
        <input type="checkbox" id="toggle" class="hidden-checkbox">
        <label for="toggle" class="toggle"></label>
    </div>
<div class="flex items-center justify-center h-screen">
    <div class="w-10/12 md:w-full max-w-2xl p-4 bg-secondary rounded-lg shadow sm:p-6 md:p-8 sm:m-6">
        <div class="text-center text-purple text-2xl mb-6">Register</div>
        <form action="{{ route('registerValidate') }}" method="POST">
            @csrf
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="username" id="username" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email" id="email" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="name" id="name" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" name="phone_number" id="phone_number" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                    <label for="phone_number" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="address" id="address" autocomplete="off" class="block py-2.5 px-0 w-full text-sm text-purple bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple peer" placeholder=" " required />
                    <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                </div>
            </div>
            <button type="submit" class="mb-6 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register Now</button>
            </form>
          <div class="text-sm font-medium text-gray-500 text-center">
            Already have account? <a href="{{ Route('loginForm') }}" class="text-blue-700 hover:underline">Sign up now</a>
        </div>
            </div>
        </div>

        <script>
            setTimeout(function() {
                var toastElement = document.getElementById('toast-warning');
                if (toastElement) {
                    toastElement.remove();
                }
            }, 3000);
        </script>
@endsection