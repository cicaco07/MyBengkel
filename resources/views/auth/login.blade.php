@extends('layouts.header')

@section('title', 'Login')
    
@section('content')
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
    @endif
<div class="flex items-center justify-center h-screen">     
    <div class="w-10/12 md:w-full max-w-sm p-4 bg-secondary rounded-lg shadow sm:p-6 md:p-8">
        <form action="{{ route('loginValidate') }}" method="post" class="space-y-6">
            <h3 class="text-2xl font-medium font-sans text-purple text-center">Login</h3>
            @csrf
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-purple">Username</label>
                <input type="username" name="username" id="username" autocomplete="off" class="bg-transparent border-2 border-purple text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                @if($errors->has('username'))
                <div class="text-sm text-purple">
                    {{ $errors->first('username') }}
                </div>
            @endif
            </div>
            
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-purple">Password</label>
                <input type="password" name="password" id="password" class="bg-transparent border-2 border-purple text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-purple">Remember me</label>
                </div>
                <a href="{{ route('showView') }}" class="ml-auto text-sm text-blue-700 hover:underline">Login dengan No Hp?</a>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 text-center">
                Not registered? <a href="{{ route('registerForm') }}" class="text-blue-700 hover:underline">Create account</a>
            </div>
        </form>
    </div>
</div>
<script>
    setTimeout(function() {
        var toastElement = document.getElementById('toast-success');
        if (toastElement) {
            toastElement.remove();
        }
    }, 3000);
</script>
@endsection
   
