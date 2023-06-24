@extends('customer.header')

@section('title', 'Customer - Servisku')

@section('main-content')

<div class="p-4 border rounded-lg mt-14 bg-gray-100 border-purple dark:border-none dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Detail Dealer</div>
    <div class="text-primary dark:text-purple m-4 font-semibold text-1xl tracking-wide">{{ $dealer->dealer_name}}</div>
    <div class="text-center md:text-start md:mx-4 my-6">
        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="text-primary bg-warning hover:bg-yellow-500 focus:ring-1 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-5 md:mx-0" type="button">
        Mengantri
        </button>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambah Antrian
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('customer.createService', ['id'=>$dealer->id])}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <div class="mb-6 mx-4">
                            <label for="vehicle_name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Jenis Motor</label>
                            <input type="text" id="vehicle_name" name="vehicle_name" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="mb-6 mx-4">
                            <label for="plat_num" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nomor Polisi</label>
                            <input type="text" id="plat_num" name="plat_num" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        </div>
                        <div class="mb-6 mx-4">
                            <label for="problem" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Keluhan</label>
                            <select id="problem" name="problem" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                <option value="Ganti Oli">Ganti Oli</option>
                                <option value="Ganti Ban" >Ganti Ban</option>
                                <option value="Service Rutin" >Servis Rutin</option>
                                <option value="Lain-lain" >Lain-lain</Lain-lain></option>
                            </select> 
                        </div>
                        <div id="otherProblemContainer" class="mb-6 mx-4" style="display: none;">
                            <label for="other_problem" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Keluhan Lainnya</label>
                            <textarea id="other_problem" name="other_problem" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="mx-4 my-2 text-primary inline-flex items-center bg-success hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Kirim Antrian
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base shadow-md">
                <tr class="bg-blue-100 dark:bg-primary text-primary dark:text-purple">
                    <td class="px-6 py-4">
                        Alamat
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->dealer_address}}
                    </td>    
                </tr>
                <tr class="bg-blue-100 dark:bg-primary text-primary dark:text-purple">
                    <td class="px-6 py-4">
                        No.Telepon
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{$dealer->user->phone_number}}
                    </td>
                </tr>
                <tr class="bg-blue-100 dark:bg-primary text-primary dark:text-purple">
                    <td class="px-6 py-4">
                        Perusahaan
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->company}}
                    </td> 
                </tr>
                <tr class="bg-blue-100 dark:bg-primary text-primary dark:text-purple">
                    <td class="px-6 py-4">
                        Map
                    </td>
                    <td class="px-6 py-4 text-end">
                        <div class="flex justify-end">
                            <iframe src="{{ $dealer->maps }}" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </td> 
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
<div class="p-4 border border-purple mt-6 dark:border-none shadow-md rounded-lg bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="py-4 text-center">
                        Plat Nomor
                    </th>
                    <th scope="col" class="text-center">
                        Jadwal
                    </th>
                    <th scope="col" class="text-center">
                        Pukul
                    </th>
                    <th scope="col" class="text-center">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($services as $data)
                <tr class="bg-gray-100 dark:bg-primary border-primary dark:border-purple text-primary dark:text-purple">
                        <td scope="row" class="text-center py-4 whitespace-nowrap dark:text-purple">
                            {{ $data->plat_num }}
                        </td>
                        <td scope="row" class="text-center">
                            {{ $data->plan_date }}
                        </td>
                        <td scope="row" class="text-center">
                            {{ $data->time }}
                        </td>
                        <td scope="row" class="text-center">
                            {{ $data->status }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col items-center mt-6">
        <div class="my-4">
            {{ $services->links('customer.pagination') }}
        </div>
    </div>
</div>

<script>
    document.getElementById('problem').addEventListener('change', function() {
        var otherProblemContainer = document.getElementById('otherProblemContainer');
        var selectedOption = this.value;

        if (selectedOption === 'Lain-lain') {
            otherProblemContainer.style.display = 'block';
        } else {
            otherProblemContainer.style.display = 'none';
        }
    });
</script>
@endsection