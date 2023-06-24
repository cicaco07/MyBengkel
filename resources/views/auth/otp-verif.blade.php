@extends('layouts.header')
@section('title', 'Login')

@section('content')

<div class="flex items-center justify-center h-screen">
    <div class="w-10/12 md:w-full max-w-sm p-4 bg-secondary rounded-lg shadow sm:p-6 md:p-8">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert"> {{session('success')}} 
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger" role="alert"> {{session('error')}} 
                    </div>
                    @endif
                    <h3 class="text-2xl font-medium font-sans text-purple text-center">Login</h3>
                    <br>
                    <form method="POST" action="{{ route('loginWithOtp') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}" />
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="otp" type="text" class="bg-transparent border-2 border-purple text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus placeholder="Enter OTP">

                                @error('otp')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection