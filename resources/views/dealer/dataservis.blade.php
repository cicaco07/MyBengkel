@extends('dealer.header')

@section('title', 'Delaer - Data Servis')

@section('main-content')
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 shadow-md bg-gray-100 dark:bg-secondary">
    <div class="flex justify-between">
        <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide ">Data Servis</div>
        <div class="mt-10 mb-4 w-1/2">
            <form class="flex items-center" action="{{ route('dealer.search2') }}" method="GET">
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
            <div class="text-primary dark:text-purple my-2 flex items-end">
                @if(isset($search))
                    Hasil pencarian dari: {{ $search }}
                @endif
            </div>
        </div>
    </div>
<div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Customer Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Plat Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Biaya
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody class="text-xs md:text-base">
            @if ($services->isEmpty())
            <tr>
                <td colspan="6" class="dark:bg-primary text-center py-4 text-primary dark:text-purple">
                    List Servis Kosong
                </td>
            </tr>
            @else
            @foreach ($services as $index => $service)
                <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                    <th scope="row" class="px-4 text-center py-4 font-medium whitespace-nowrap dark:text-white">
                        {{ $index + 1 }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $service->user->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $service->plat_num }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $service->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $service->status }}
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    
</div>

    <div class="flex flex-col items-center mt-6">
        <div class="mt-5 md:mt-0">
            {{ $services->links('dealer.pagination') }}
        </div>
    </div>
</div>
@endsection