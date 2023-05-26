@extends('customer.header')

@section('title', 'Suzuki - Dashboard')

@section('main-content')
<div class="text-purple mt-20 font-semibold text-2xl tracking-wide">Suzuki Dealer</div>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($dealer as $dealer)
    <div>
        <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
            <div class="px-5 pb-5 mt-4">
                <h3 class="text-xl font-bold mb-4 text-center md:text-left">{{ $dealer->dealer_name}}</h3>
                <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">{{ $dealer->dealer_address }}</p>
                <div class="flex items-center justify-center md:justify-between mt-4">
                    <div class="md:inline block"></div>
                    <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    


@endsection
