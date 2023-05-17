@extends('user.header')

@section('title', 'Honda - Dashboard')

@section('main-content')
<div class="text-purple mt-20 font-semibold text-2xl tracking-wide">Honda Dealer</div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Kartika Sari</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Jl. Jaksa Agung Suprapto 54, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="profilku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Centratama</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Jl. Kol. Sugiono 154, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="antrian" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Cahaya Motor</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Jl. Raya Mandoroko Kav. 3, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="servisku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Dau Motor</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Jl. Raya.mulyoagung 9 Jetis Dau, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="servisku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Hs. Motor</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Nongkosewu Rt.01 Rw.01 Poncokusumo, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="servisku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-center md:text-left">Jaya Motor</h3>
                    <p class="text-xs md:text-sm font-medium text-primary text-center md:text-left">Jl. Raya Tumpang 170 Tumpang, Malang</p>
                    <div class="flex items-center justify-center md:justify-between mt-4">
                        <div class="md:inline block"></div>
                        <a href="servisku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection
