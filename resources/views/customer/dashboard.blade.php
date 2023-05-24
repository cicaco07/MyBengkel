@extends('customer.header')

@section('title', 'customer - Dashboard')

@section('main-content')
<div class="text-purple mt-20 font-semibold text-2xl tracking-wide">Dashboard</div>
    <div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
        <div class="text-purple m-4 font-semibold text-lg md:text-2xl tracking-wide">Selamat Datang, {{ $user->name }}</div>
        
    </div>
    
    


@endsection
