@extends('mechanic.header')

@section('title', 'Mekanik - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    <div class="mx-12">
        <div class="flex items-center justify-between mt-4 text-purple bg-primary rounded-t-lg p-4">
            <div class="">Jenis Motor</div>
            <div class="">Yamaha Mio Matic 2015</div>
        </div>
        <div class="flex items-center justify-between text-purple bg-primary p-4">
            <div class="">Nomor Polisi</div>
            <div class="">N 1293 LU</div>
        </div>
        <div class="flex items-center justify-between text-purple bg-primary p-4 rounded-b-lg">
            <div class="">Keluhan</div>
            <div class="">Sering mogok tengah jalan</div>
        </div>
        <div class="my-6">
            <a href="#" class="mr-4 text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Antrian Selesai</a>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Data Spare Part</a>    
        </div>
    </div>
    
</div>
<div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">List Antrian</div>
    <div class="mx-12">
        <div class="flex items-center justify-between mt-4 text-purple bg-primary rounded-t-lg p-4">
            <div class="">N 1293 LU</div>
            <div class="">Yamaha Mio Matic 2015</div>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">00:10:00</a>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Start</a>
        </div>
        <div class="flex items-center justify-between text-purple bg-primary rounded-t-lg p-4">
            <div class="">N 1293 LU</div>
            <div class="">Yamaha Mio Matic 2015</div>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">00:10:00</a>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Start</a>
        </div>
        <div class="flex items-center justify-between text-purple bg-primary rounded-t-lg p-4">
            <div class="">N 1293 LU</div>
            <div class="">Yamaha Mio Matic 2015</div>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">00:10:00</a>
            <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Start</a>
        </div>
    </div>
</div>
@endsection