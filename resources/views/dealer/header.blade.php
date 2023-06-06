@extends('layouts.sidebar')

@section('role', 'Dealer')

@section('list-menu')
<div class="flex items-center justify-center flex-col">
   <img class="h-32 w-32 rounded-full" src="{{asset('img/herta.jpg')}}">
   <div class="text-sm text-gray-900 dark:text white text-purple m-4 text-center">{{ auth()->user()->dealer->company}} <br>
      {{ auth()->user()->dealer->dealer_address}}
   </div>

</div>
   <li>
       <a href="dashboard" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
        <svg aria-hidden="true" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          <span class="ml-3 ">Dashboard</span>
       </a>
    </li>
    <li>
       <a href="dealerku" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Dealer-ku</span>
       </a>
    </li>
    <li>
       <a href="datapegawai" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
           <svg aria-hidden="true" class="w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          <span class="flex-1 ml-3 ">Data Pegawai</span>
       </a>
    </li>
    <li>
       <a href="dataantrian" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
          <span class="flex-1 ml-3 ">Data Antrian</span>
       </a>
    </li>
    <li>
        <a href="dataservis" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
           <span class="flex-1 ml-3 ">Data Servis</span>
        </a>
    </li>
    <li>
        <a href="datasparepart" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
           <span class="flex-1 ml-3 ">Data Sparepart</span>
        </a>
    </li>
    <li>
        <a href="transaksi" class="text-sm text-gray-900 dark:text white flex items-center p-3 mb-4 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
           <span class="flex-1 ml-3 ">Data Transaksi</span>
        </a>
    </li>
@endsection

@section('main')
    @yield('main-content')
@endsection
