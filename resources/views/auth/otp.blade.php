@extends('layouts.header')
@section('title', 'Login')

@section('content')

<div class="flex items-center justify-center h-screen">     
    <div class="w-10/12 md:w-full max-w-sm p-4 bg-secondary rounded-lg shadow sm:p-6 md:p-8">
        <form  action="{{ route('generate') }}" method="POST" class="space-y-6">
            <h3 class="text-2xl font-medium font-sans text-purple text-center">Login</h3>
            @csrf
            <div>
                <label for="phone_number" class="block mb-2 text-sm font-medium text-purple">Masukan Nomor Telepon</label>
                <input id="phone_number" type="text" class="bg-transparent border-2 border-purple text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('phone_number') is-invalid @enderror" name="phone_number"  required autocomplete="phone_number" autofocus placeholder="Masukan Nomor telepon yang terdaftar">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Generate OTP</button>
        </form>
    </div>
</div>
@endsection