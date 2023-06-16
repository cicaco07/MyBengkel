@extends('mechanic.header')

@section('title', 'Mekanik - Servisku')

@section('main-content')
<div class="p-4 border border-purple mt-14 dark:border-none shadow-md rounded-lg bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">List Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="py-3 w-1/12">
                        No 
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Nama Customer
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Plat Nomor
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Tipe motor
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Problem
                    </th>
                    <th scope="col" class="py-3 w-3/12">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
            @foreach ($services as $servis)
                @if ($servis->status=='process'||$servis->status=='repairing')
                <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                    <th scope="row" class="text-center py-4 font-medium whitespace-nowrap dark:text-white">
                        {{ $servis->id}}
                    </th>
                    <td class="text-center py-4">
                        {{ $servis->user->name }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->plat_num }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->vehicle_name }}
                    </td>
                    <td class="text-center py-4">
                        {{ $servis->problem }}
                    </td>
                    <td class="">
                        <div class="flex justify-around text-center">
                            @if ($servis->status=='process')
                            <form action="{{route('mechanic.updateStatus2', $servis->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="text-primary bg-warning px-6 py-2 rounded-lg" type="submit">Start</button>
                            </form>
                            @elseif($servis->status=='repairing')
                                <button class="text-primary bg-warning px-6 py-2 rounded-lg" disabled type="submit">Processing</button>
                                <form action="{{route('mechanic.updateStatus3', $servis->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="text-primary bg-success hover:bg-green-400 px-6 py-2 rounded-lg" type="submit">Finish</button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="p-4 border border-purple dark:border-none shadow-md rounded-lg mt-6 bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">List History Servis</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="py-3 w-1/12">
                        No 
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Nama Customer
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Plat Nomor
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Tipe motor
                    </th>
                    <th scope="col" class="py-3 w-2/12">
                        Problem
                    </th>
                    <th scope="col" class="py-3 w-3/12">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @foreach ($services as $servis)
                    @if ($servis->status=='done')
                    <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <th scope="row" class="text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $servis->id}}
                        </th>
                        <td class="text-center py-4">
                            {{ $servis->user->name }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->plat_num }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->vehicle_name }}
                        </td>
                        <td class="text-center py-4">
                            {{ $servis->problem }}
                        </td>
                        <td class="text-center">
                            <button class="text-primary bg-blue-500 px-6 py-2 rounded-lg" type="submit">Detail</button>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
        </table>
    </div>

</div>






@endsection