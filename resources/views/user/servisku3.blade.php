@extends('user.header')

@section('title', 'User - Servisku')

@section('main-content')
<div class="p-4 border-1 rounded-lg mt-14 bg-secondary">
    <div class="text-purple m-4 font-semibold text-2xl tracking-wide">Servisku</div>
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Jenis Motor
                    </td>
                    <td class="px-6 py-4 text-end">
                        Honda Beat
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-6 py-4">
                        Nomor Polisi
                    </td>
                    <td class="px-6 py-4 text-end">
                        L 3192 XS
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="p-3 border-1 rounded-lg mt-3 bg-secondary">
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <tbody class="text-xs md:text-base">
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        Perbaikan Gear
                    </td>
                    <td>
                        <div class="relative h-8 w-90 min-w-[200px]">
                            <select class="peer w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-1 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option value="Saringan Udara">Saringan Udara</option>
                                <option value="CDI Beat">CDI Beat</option>
                                <option value="Shock Breaker">Shock Breaker</option>
                                <option value="Honda Dinamo Starter Honda CRV">Honda Dinamo Starter Honda CRV</option>
                            </select>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">00:50:00</a>
                    </td>
                    <td>
                        <div class="inline-flex items-center">
                            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox" data-ripple-dark="true">
                                <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" id="checkbox" checked />
                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        Perbaikan Berat
                    </td>
                    <td>
                        <div class="relative h-8 w-90 min-w-[200px]">
                            <select class="peer w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-1 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option value="HONDA Alternator Assy">HONDA Alternator Assy</option>
                                <option value="HONDA Brake Booster Assy">HONDA Brake Booster Assy</option>
                                <option value="HONDA Front Wheel Hub">HONDA Front Wheel Hub</option>
                                <option value="HONDA ZOOMER X Fork">HONDA ZOOMER X Fork</option>
                            </select>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">01:30:00</a>
                    </td>
                    <td>
                        <div class="inline-flex items-center">
                            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox" data-ripple-dark="true">
                                <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-pink-500 hover:before:opacity-10" id="checkbox" checked />
                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr class="bg-primary text-purple">
                    <td class="px-1 md:px-6 py-4 text-center">
                        Perbaikan Oli
                    </td>
                    <td>
                        <div class="relative h-8 w-90 min-w-[200px]">
                            <select class="peer w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-1 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option value="Shell Helix ECO SYNTHETIC">Shell Helix ECO SYNTHETIC</option>
                                <option value="AHM OIL SPX2 Honda">AHM OIL SPX2 Honda</option>
                            </select>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="#" class="text-primary bg-dark-purple hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">00:05:00</a>
                    </td>
                    <td>
                        <div class="inline-flex items-center">
                            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="checkbox" data-ripple-dark="true">
                                <input type="checkbox" class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 checked:before:bg-green-500 hover:before:opacity-10" id="checkbox" checked />
                                <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-white opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <table class=" w-full text-sm mt-1 ">
        <tbody class="text-xs md:text-base">
            <tr class="bg-secondary text-purple">
                <td class="text-left">
                    <a href="#" class="text-primary m-20 bg-warning hover:bg-violet-600 hover:font-semibold focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 px-3 md:py-2.5 py-2 text-center">Batalkan Antrian</a>
                </td>
                <td>
                    <div class="text-right ">
                        <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="middle m-10 rounded-lg bg-green-500 py-3 px-6 font-semibold text-xs uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:bg-violet-600 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true" type="button">Register Now !</button>
                        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <div class="relative bg-secondary rounded-lg shadow">
                                    <div class="flex items-start justify-between p-4 rounded-t ">
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <form>
                                        <table class="w-full text-sm">
                                    </form>
                                    <div class="text-left flex items-center p-6 space-x-2 border-gray-200 rounded-b ">
                                        <button data-modal-hide="staticModal" type="button" class=" w-full text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection