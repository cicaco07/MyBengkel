@extends('admin.header')

@section('title', 'Admin - Data Dealer')

@section('main-content')
@if(session('success'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-success rounded-lg shadow" role="alert" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-100 p-1.5 inline-flex h-8 w-8 text-green-500 hover:text-green-500 bg-green-100 hover:bg-green-300" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
    @elseif(session('error'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
    <div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-primary bg-warning rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="mx-3 text-sm font-normal">{{ session('error')}}</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-yellow-300 hover:text-yellow-700 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-yellow-400 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    </div>
    @endif
    <div class="p-4 rounded-lg mt-14 bg-gray-100 border border-purple dark:border-none shadow-md dark:bg-secondary">
        <div class="flex flex-col justify-between md:flex-row">
            <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide md:w-1/2">Data Dealer</div>
            <div class="mt-2 md:mt-10 mb-4 md:w-1/2">
            <form class="flex items-center" action="{{ route('admin.dataDealer') }}" method="GET">
                @csrf   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" autocomplete="off" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                </div>
                
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            @if(isset($keyword))
            <div class="flex justify-between mt-4">
                <div class="text-primary dark:text-purple mb-4 flex items-end">Hasil pencarian dari: {{ $keyword }}</div>
                <a href="{{route('admin.dataDealer')}}" class="text-blue-600">Clear search</a>
            </div>
            @endif
        </div>              
    </div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="py-4 text-center">
                        Id
                    </th>
                    <th scope="col" class="text-center">
                        Nama Dealer
                    </th>
                    <th scope="col" class="text-center">
                        Alamat
                    </th>
                    <th scope="col" class="text-center">
                        Perusahaan
                    </th>
                    <th scope="col" class="text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($users as $data)
                <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <td scope="row" class="px-4 text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $data->id }}
                        </td>
                        <td class="text-center">{{ $data->dealer_name }}</td>
                        <td class="text-center">{{ $data->dealer_address }}</td>
                        <td class="text-center">{{ $data->company }}</td>
                        <td class="flex justify-evenly">
                            <button id="defaultModalButton-{{ $data->id }}" data-modal-toggle="defaultModal-{{ $data->id }}" class="focus:outline-none text-primary bg-dark-purple hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2 mx-2 md:mx-0" type="button">
                                Edit
                                </button>
                            <div id="defaultModal-{{ $data->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                    <div class="relative p-4 bg-gray-100 dark:bg-secondary rounded-lg shadow sm:p-5">
                                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                                            <h3 class="text-lg font-semibold text-primary dark:text-purple">
                                                Edit User
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal-{{ $data->id }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.updateDealer', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                <div>
                                                    <label for="id" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Id User</label>
                                                    <input type="text" name="id" id="id" value="{{$data->id}}" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled>
                                                </div>
                                                <div>
                                                    <label for="dealer_name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama Dealer</label>
                                                    <input type="text" name="dealer_name" id="dealer_name" value="{{$data->dealer_name}}" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled>
                                                </div>
                                                <div>
                                                    <label for="dealer_address" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat Dealer</label>
                                                    <input type="text" name="dealer_address" id="dealer_address" value="{{$data->dealer_address}}" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" disabled>
                                                </div>
                                                <div>
                                                    <label for="company" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Company</label>
                                                    <select id="company" name="company" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                                        <option value="Honda" {{ $data->company === 'Honda' ? 'selected' : '' }}>Honda</option>
                                                        <option value="Suzuki" {{ $data->company === 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                                        <option value="Yamaha" {{ $data->company === 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="text-primary inline-flex items-center bg-success hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- <form action="{{ route('admin.destroyDealer', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-primary bg-red-500 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 md:px-5 py-1 md:py-2.5 my-2">Hapus</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5 flex flex-col md:flex-row justify-between">
        <div class="">
            <button id="defaultModalButton" data-modal-toggle="defaultModal" class="text-primary bg-success hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 mx-0" type="button">
                Tambah Data
                </button>
        </div>
        <div class="mt-5 md:mt-0">
            {{ $users->links('admin.pagination') }}
        </div>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <div class="relative p-4 bg-gray-100 dark:bg-secondary rounded-lg shadow sm:p-5">
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                    <h3 class="text-lg font-semibold text-primary dark:text-purple">
                        Tambah Dealer
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.createDealer')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="user_id" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Id User</label>
                            <input type="text" name="user_id" id="user_id" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required="">
                        </div>
                        <div>
                            <label for="dealer_name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama Dealer</label>
                            <input type="text" name="dealer_name" id="dealer_name" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required="">
                        </div>
                        <div>
                            <label for="dealer_address" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat Dealer</label>
                            <input type="text" name="dealer_address" id="dealer_address" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="" required="">
                        </div>
                        <div>
                            <label for="company" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Company</label>
                            <select id="company" name="company" class="bg-gray-100 dark:bg-primary text-primary dark:text-purple text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Select company</option>
                                <option value="Yamaha">Yamaha</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Honda">Honda</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="text-primary inline-flex items-center bg-success hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        var toastElements = document.querySelectorAll('#toast-success, #toast-warning, #toast-danger');
        toastElements.forEach(function(element) {
            if (element) {
                element.remove();
            }
        });
    }, 3000);
</script>

@endsection