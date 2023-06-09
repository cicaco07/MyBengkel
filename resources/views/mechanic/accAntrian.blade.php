@extends('mechanic.header')

@section('title', 'Mechanic - ACC Antrian')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Antrian</div>
            <div class="text-xs md:text-lg">
                <div class="mb-6 mx-6 grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-purple dark:text-white">Nama Customer</label>
                        <input type="text" id="first_name" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->user->name}}" disabled>
                    </div>
                    <div>
                        <label for="plat_num" class="block mb-2 text-sm font-medium text-purple dark:text-white">Plat Nomor</label>
                        <input type="text" id="last_name" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->plat_num}}" disabled>
                    </div>
                    <div>
                        <label for="problem" class="block mb-2 text-sm font-medium text-purple dark:text-white">Problem</label>
                        <input type="text" id="company" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{$antrian->problem}}" disabled>
                    </div>  
                    
                </div>
            
            <label for="platnum" class=" mx-6 block mb-2 text-sm font-medium text-purple">Kebutuhan Servis</label>  
            <div class="mb-6 mx-6 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-purple uppercase bg-table-head">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Sparepart
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Stok
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Total Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spareparts as $sparepart)
                        <tr class="bg-primary border-b border-purple text-purple last:border-none">
                            <td class="w-32 p-4">
                                <input id="default-checkbox" name="sparepart[]" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onclick="calculateTotalPrice(0)">
                            </td>
                            <td class="px-6 py-4 text-purple dark:text-white">
                                {{$sparepart->namaitem}}
                            </td>
                            <td class="px-6 py-4 text-purple">
                                {{$sparepart->harga}}
                            </td>
                            <td class="px-6 py-4 text-pruple dark:text-white">
                                {{$sparepart->stok}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button" onclick="decrementQuantity(this)">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" class="qty-input bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" value="0" min="0" onchange="calculateTotalPrice({{$loop->index}})" required>
                                    </div>
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button" onclick="incrementQuantity(this)">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                
                            </td>
                            <td class="px-6 py-4 total-harga">
                                <span class="total">{{$sparepart->harga * $sparepart->qty}}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <form action="" method="post">
                @csrf
                <a href="{{route('mechanic.biaya')}}" class="mb-6 mx-6 text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-3 md:px-5 py-1.5 md:py-2.5 text-center">Hitung Biaya</a>
            </form> --}}
        </div>
    </div>
</div>

<script>
    function incrementQuantity(button) {
    const input = button.parentNode.querySelector('input');
    const value = parseInt(input.value);
    input.value = value + 1;
    calculateTotalPrice(input);
}

function decrementQuantity(button) {
    const input = button.parentNode.querySelector('input');
    const value = parseInt(input.value);
    if (value > 0) {
        input.value = value - 1;
        calculateTotalPrice(input);
    }
}

function calculateTotalPrice(input) {
    const row = input.parentNode.parentNode;
    const qty = parseInt(input.value);
    const harga = parseInt(row.querySelector('.px-6.py-4.text-purple').textContent);
    const total = qty * harga;
    const totalHargaColumn = row.querySelector('.total-harga .total');
    totalHargaColumn.textContent = total;
}




    
</script>


@endsection