@extends('dealer.header')

@section('title', 'Delaer - Data Servis')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="flex justify-between">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide w-1/2">Data Servis</div>
        <div class="mt-10 mb-4 w-1/2">
            <form class="flex items-center" action="{{ route('dealer.search2') }}" method="GET">
                @csrf   
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" autocomplete="off" name="search" class="bg-primary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
                </div>
                
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            <div class="text-purple mt-2">
                @if(!empty($search))
                    Hasil pencarian dari: {{ $search }}
                @endif
            </div>
        </div>
    </div>
<div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-purple uppercase bg-table-head">
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
            @foreach ($services as $index => $service)
                <tr class="bg-primary border-b border-purple text-purple">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
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
        </tbody>
    </table>
    
</div>

<div class="flex flex-col items-center mt-6">
    <span class="text-sm text-purple">
        Showing <span class="font-semibold">1</span> to <span class="font-semibold dark:text-white">10</span> of <span class="font-semibold">100</span> Entries
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
        <button class="px-4 py-2 text-sm font-medium text-purple bg-gray-800 rounded-l hover:bg-primary">
            Prev
        </button>
        <button class="px-4 py-2 text-sm font-medium text-purple bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-primary">
            Next
        </button>
    </div>
  </div>
</div>
@endsection