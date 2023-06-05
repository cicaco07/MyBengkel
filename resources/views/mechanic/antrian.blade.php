@extends('mechanic.header')

@section('title', 'Mekanik - Antrian')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    
<div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-purple uppercase bg-table-head">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No A
                </th>
                <th scope="col" class="px-6 py-3">
                    Customer Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Plat Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody class="text-xs md:text-base">
            <tr class="bg-primary border-b border-purple text-purple">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    1.
                </th>
                <td class="px-6 py-4">
                    Aryo Deva Saputra
                </td>
                <td class="px-6 py-4">
                    N 3120 LU
                </td>
                <td class="px-6 py-4">
                    Dikerjakan
                </td>
                
            </tr>
            <tr class="bg-primary border-b border-purple text-purple">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    2.
                </th>
                <td class="px-6 py-4">
                    Bryan Tosin Saputro
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                
            </tr>
            <tr class="bg-primary text-purple">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap dark:text-white">
                    3.
                </th>
                <td class="px-6 py-4">
                    Desy Ayurianti
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                
            </tr>
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