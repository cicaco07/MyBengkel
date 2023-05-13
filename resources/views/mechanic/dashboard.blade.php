@extends('mechanic.header')

@section('title', 'Mekanik - Dashboard')

@section('main-content')
<div class="text-purple mt-14 font-semibold text-2xl tracking-wide">Dashboard</div>
    <div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Selamat Datang, Andi</div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4">Profilku</h3>
                    <span class="text-sm font-semibold text-primary">Data user, lakukan perubahan data jika tidak sesuai</span>
                    <div class="flex items-center justify-between mt-4">
                        <div class=""></div>
                        <a href="profilku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <p class="text-xl font-bold mb-4">Antrian</p>
                    <span class="text-sm font-semibold text-primary">List antrian yang sedang diproses, dikerjakan atau sudah selesai</span>
                    <div class="flex items-center justify-between mt-4">
                        <div class=""></div>
                        <a href="antrian" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full max-w-sm bg-purple border border-purple rounded-lg shadow mt-10">
                <div class="px-5 pb-5 mt-4">
                    <h3 class="text-xl font-bold mb-4">Servisku</h3>
                    <span class="text-sm font-semibold text-primary">Mekanik dapat mentukan kapan akan start servis dari list antrian</span>
                    <div class="flex items-center justify-between mt-4">
                        <div class=""></div>
                        <a href="servisku" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


@endsection
