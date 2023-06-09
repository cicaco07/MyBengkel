@extends('dealer.header')

@section('title', 'Delaer - Antrian')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
        <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Data Antrian</div>
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