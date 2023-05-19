@extends('admin.header')

@section('title', 'Admin - Data')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    
<div class="relative overflow-x-auto shadow-md rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-purple uppercase bg-table-head">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Name Dealer
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="text-xs md:text-base">

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