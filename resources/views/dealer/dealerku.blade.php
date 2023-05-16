@extends('dealer.header')

@section('title', 'Dealer - Dealerku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
<div class="text-purple m-4 font-semibold text-2xl tracking-wide">Profilku</div>

    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-secondary rounded-lg shadow">
            <div class="flex items-center justify-center">
              <img class="rounded-full w-32 h-32 bg-white mb-8" src="{{ asset('img/herta.jpg')}}">
              </div>
              <form>
                  <div class="mb-6 mx-6">
                      <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nama Dealer</label>
                      <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Yamaha Dealer" required>
                  </div>
                  <div class="mb-6 mx-6">
                      <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Pemilik Dealer</label>
                      <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Yohanes Panjaitan" required>
                  </div>
                  <div class="mb-6 mx-6">
                      <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Alamat</label>
                      <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Jl. Tirtagangga No.25, Samaan" required>
                  </div>
                  <div class="mb-2 mx-6">
                      <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Telepon</label>
                      <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0328661161" required>
                  </div>
              </form>
            
            <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                <button data-modal-hide="staticModal" type="button" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                
            </div>
        </div>
    </div>

</div>
@endsection