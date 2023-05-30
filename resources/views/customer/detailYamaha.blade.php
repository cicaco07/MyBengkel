@extends('customer.header')

@section('title', 'customer - Servisku')

@section('main-content')

<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Detail Dealer</div>
    <div class="text-purple m-4 font-semibold text-1xl tracking-wide">{{ $dealer->dealer_name}}</div>
    <div class="text-center md:text-start md:mx-4 my-6">
        <a data-modal-target="staticModal" data-modal-toggle="staticModal" class="text-primary bg-warning hover:bg-yellow-500 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Mengantri</a>    
    </div>
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-secondary rounded-lg shadow">
                <div class="flex items-start justify-between p-4 rounded-t ">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="flex items-center justify-center">
                    
                    </div>
                    <form>
                        <div class="mb-6 mx-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Jenis Motor</label>
                            <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-2 mx-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Nomor Polisi</label>
                            <input type="text" id="default-input" class="bg-primary border border-secondary text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mb-6 mx-6">
                            <label for="default-input" class="block mb-2 text-sm font-medium text-purple">Keluhan</label>
                            <select id="problem" name="problem" class="bg-primary text-purple text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="gantioli">Ganti Oli</option>
                                <option value="gantiban" >Ganti Ban</option>
                                <option value="servisrutin" >Servis Rutin</option>
                                <option value="servisrutin" >Lain-lain</Lain-lain></option>
                            </select>
                            
                        </div>
                    </form>
                
                <div class="flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                    <button data-modal-hide="staticModal" type="submit"  class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kirim Antrian</button>
                </div>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Alamat
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->dealer_address}}
                    </td>    
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        No.Telepon
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{$dealer->user->phone_number}}
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Perusahaan
                    </td>
                    <td class="px-6 py-4 text-end">
                        {{ $dealer->company}}
                    </td> 
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="p-4 border-1 rounded-lg mt-6 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Antrian</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-primary">
                    <td class="text-gray-100 bg-gray-700 px-1 md:px-6 py-4 text-center">
                        Nomor Polisi
                    </td>
                    <td class="bg-yellow-300 px-1 md:px-6 py-4 text-center">
                        Yamaha Matic Mio
                    </td>
                </tr>
                <tr class="bg-primary text-primary">
                    <td class="text-gray-100 bg-gray-500 px-1 md:px-6 py-4 text-center">
                        Lama Antrian
                    </td>
                    <td class="bg-yellow-100 px-1 md:px-6 py-4 text-center">
                        10 : 00 : 00
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection