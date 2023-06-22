@extends('customer.header')

@section('title', 'customer - Panduan Sistem')
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
@endif

<div class="p-4 border border-purple dark:border-none shadow-md rounded-lg mt-14 bg-gray-100 dark:bg-secondary">
  <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Panduan Sistem</div>
    
<div id="accordion-open" data-accordion="open">
    <h2 id="accordion-open-heading-1">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
        <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>My Bengkel</span>
        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-purple">
            My Bengkel merupakan sebuah aplikasi yang dikembangkan untuk improvisasi proses bisnis dari suatu dealer servis. Dengan adanya produk ini dealer servis menjadi lebih mudah dalam mengelola antrian servis, menjual sparepart motor, pengadministrasian data servis, dan sebagainya. Selain itu produk ini juga dapat memudahkan pelanggan dealer melihat dan mendaftar antrian servis, melihat estimasi biaya servis berdasarkan keluhan yang disampaikan oleh pelanggan, dan sebagainya.
        </p>
      </div>
    </div>
    <h2 id="accordion-open-heading-2">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
        <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Cara Penggunaan</span>
        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-purple">
            Berikut merupakan panduan langkah demi langkah untuk menggunakan sistem Antrian Servis Motor Online. Mohon ikuti instruksi di bawah ini untuk memanfaatkan sistem dengan efektif.
            <br>
            1. Login<br>
            2. Pilih Dealer<br>
            3. Lihat Antrian Dealer<br>
            4. Tambah Antrian<br>
            5. Lihat Antrian Servisku<br>
            6. Lihat History<br>
            7. Keluar<br>
        </p>
        
      </div>
    </div>
    <h2 id="accordion-open-heading-3">
      <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
        <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Login</span>
        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </h2>
    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-purple">
            <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Buka sistem MyBengkel, Servis Motor Antrian Online</li>
                <li>Pada halaman login, masukkan username dan password Anda.</li>
                <li>Klik tombol "Login" untuk masuk ke sistem.
                </li>
              </ul>
      </div>
    </div>
    <h2 id="accordion-open-heading-4">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Pilih Dealer</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Setelah login berhasil, Anda akan diarahkan ke halaman pemilihan dealer.</li>
                <li>Pilih dealer servis motor yang Anda inginkan dari daftar dealer yang tersedia.</li>
                    <li>Pastikan untuk memilih dealer terlebih dahulu sebelum melanjutkan ke langkah berikutnya.</li>
                
                </ul>
        </div>
      </div>
      <h2 id="accordion-open-heading-5">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-priamry border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-5" aria-expanded="false" aria-controls="accordion-open-body-5">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Lihat Antrian Dealer</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-5" class="hidden" aria-labelledby="accordion-open-heading-5">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Setelah memilih dealer, Anda akan diarahkan ke halaman antrian dari delaer yang anda pilih.</li>
                <li>Pada halaman ini, Anda dapat melihat nomor antrian dan waktu tunggu yang telah berlangsung untuk layanan servis motor.</li>
                <li>Anda juga dapat melihat status antrian, apakah sudah diproses atau belum.</li>
                    
        </div>
      </div>
      <h2 id="accordion-open-heading-6">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-6" aria-expanded="false" aria-controls="accordion-open-body-6">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Tambah Antrian</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-6" class="hidden" aria-labelledby="accordion-open-heading-5">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Untuk menambahkan antrian servis motor, pilih opsi "Mengantri" di halaman antrian.</li>
                <li>Masukkan informasi detail kendaraan dan keluhan yang dihadapi pada formulir tambah antrian.</li>
                <li>Klik 'Kirimkan Antrian' untuk submit antrian</li>
                <li>Sistem akan memberikan nomor antrian dan perkiraan waktu tunggu.</li>
        </div>
      </div>
      <h2 id="accordion-open-heading-7">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-7" aria-expanded="false" aria-controls="accordion-open-body-7">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Lihat Antrian Servisku</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-7" class="hidden" aria-labelledby="accordion-open-heading-7">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Jika Anda ingin melihat antrian yang sudah anda buat, klik menu 'Servisku'</li>
                <li>Sistem akan menampilkan informasi antrian yang sudah anda buat seperti informasi kendaraan dan status antrian</li>
                <li>Apabila status antrian berstatus 'accept', artinya sistem sudah membuat informasi waktu antrian berikut juga dengan rincian biaya yang diperlukan. 
                <li>Anda bisa melihat deretan informasi tersebut saat klik button 'Detail Servisku.'</li>
                <li>Saat status accept, anda harus konfirmasi ulang agar antrian servis dapat diproses. Untuk mengubah statu menjadi proses, klik button 'Detail Servisku' dan selanjutnya klik 'Terima Rekomendasi Servis'. Hal ini akan otomatis mengubah status antrian menjadi 'process'</li>
                <li>Jika anda ingin mencetak informasi antrian anda yang sudah dibuat, klik button 'Print' dengan catatan Button 'Print' akan muncul ketika status antrian sudah <b>accept, process atau rapairing</b></li>
                <li>Sistem akan memberikan nomor antrian dan perkiraan waktu tunggu.</li>
        </div>
      </div>
      <h2 id="accordion-open-heading-8">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-8" aria-expanded="false" aria-controls="accordion-open-body-8">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Batalkan Antrian</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-8" class="hidden" aria-labelledby="accordion-open-heading-8">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Jika ingin membatalkan antrian, masuk pada menu 'Servisku'</li>
                <li>Klik button 'Batalkan Antrian'</li>
                <li>Konfirmasi kembali jika ingin membatalkan antrian</li>
                <li>Sistem akan membatalkan antrian anda yang sudah dibuat</li>
        </div>
      </div>
      <h2 id="accordion-open-heading-9">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-9" aria-expanded="false" aria-controls="accordion-open-body-9">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Lihat Histori</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-9" class="hidden" aria-labelledby="accordion-open-heading-9">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Untuk melihat riwayat antrian yang pernah Anda buat, pilih opsi "History Servis" di halaman antrian.</li>
                <li>Anda akan melihat daftar antrian servis motor sebelumnya yang Anda tambahkan.</li>
                <li>Riwayat antrian akan mencakup nomor antrian, waktu tunggu,status, dan informasi lainnya yang relevan.</li>
                <li>Jika Anda ingin melihat detail informasi antrian servis yang pernah dibuat, klikk tombol 'Detail'</li>
                <li>Jika Anda ingin cetak detail history informasi dari antrian yang anda buat beserta rincian biaya servisnya, klik tombol 'Print'</li>
        </div>
      </div>
      <h2 id="accordion-open-heading-10">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-primary border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-purple hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-10" aria-expanded="false" aria-controls="accordion-open-body-10">
          <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Keluar</span>
          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>
      <div id="accordion-open-body-10" class="hidden" aria-labelledby="accordion-open-heading-10">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 bg-blue-200 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-purple">
              <ul class="pl-5 text-gray-500 list-disc dark:text-purple">
                <li>Jika Anda ingin keluar dari sistem, klik opsi icon logout pada pojok kanan atas sistem</li>
                <li>Klik tombol login</li>
                <li>Anda akan diarahkan kembali ke halaman login.</li>
                    
                    
        </div>
      </div>
  </div>
  


@endsection