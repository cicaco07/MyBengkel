@extends('layouts.sidebar')

@section('role', 'customer')

@section('list-menu')
<div class="flex items-center justify-center flex-col">
   <img class="h-32 w-32 rounded-full" src="{{asset('img/herta.jpg')}}">
   <div class="text-purple m-4 text-center">test user</div>
</div>
   <li>
       <a href="yamaha" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
          <span class="ml-3 ">Yamaha</span>
       </a>
    </li>
    <li>
       <a href="honda" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Honda</span>
       </a>
    </li>
    <li>
       <a href="suzuki" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
           <svg aria-hidden="true" class="text-sm w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          <span class="flex-1 ml-3 ">Suzuki</span>
       </a>
    </li>
    <li>
       <a href="servisku" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
          <span class="flex-1 ml-3 ">Servis Ku</span>
       </a>
    </li>
    <li>
       <a href="historyservis" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
          <span class="flex-1 ml-3 ">History Servis</span>
       </a>
    </li>
    <li>
       <a href="panduansistem" class="text-sm flex items-center p-3 mb-2 text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
          <span class="flex-1 ml-3 ">Panduan Sistem</span>
       </a>
    </li>
@endsection

@section('main')
    @yield('main-content')
@endsection