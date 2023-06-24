@extends('layouts.header')

@section('title', 'Sidebar')

@section('content')
<nav class="fixed top-0 md:z-40 z-30 w-full bg-gray-200 dark:bg-primary border-b-2 border-purple dark:border-secondary">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-purple">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="#" class="flex ml-2 md:mr-24">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-primary dark:text-purple">@yield('role')</span>
        </a>
      </div>
      <div class="flex items-center">
        <div class="flex items-center ml-3">
          {{-- <div class="pr-5">
            <input type="checkbox" id="toggle" class="hidden-checkbox">
            <label for="toggle" class="toggle"></label>
          </div> --}}
          <div>
            <button type="button" class="flex text-sm mr-6 bg-gray-800 rounded-full focus:ring-2 focus:ring-purple" aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>
              <img class="w-10 h-10 rounded-full" src="{{ asset('img/logout.png') }}" alt="user photo">
            </button>
          </div>
          <div class="z-50 hidden my-4 text-base list-none border border-purple bg-purple divide-y divide-gray-100 rounded" id="dropdown-user">
            <div class="px-4 py-3" role="none">
              <p class="text-sm text-primary" role="none">
                {{ $user->name }}
              </p>
              <p class="text-sm font-medium primary truncate" role="none">
                {{ $user->email }}
              </p>
            </div>
            <ul class="bg-gray-100 dark:bg-primary" role="none">
              {{-- @if ($user->role=='customer')
              <li>
                <a href="{{route(customer.dashboard)}}" class="block px-4 py-2 text-sm text-primary dark:text-purple dark:hover:text-primary hover:bg-dark-purple dark:hover:bg-dark-purple" role="menuitem">Dashboard</a>
              </li>
              @elseif($user->role=='dealer')
              <li>
                <a href="{{route(dealer.dashboard)}}" class="block px-4 py-2 text-sm text-primary dark:text-purple dark:hover:text-primary hover:bg-dark-purple dark:hover:bg-dark-purple" role="menuitem">Dashboard</a>
              </li>
              @elseif($user->role=='mechanic')
              <li>
                <a href="{{route(mechanic.dashboard)}}" class="block px-4 py-2 text-sm text-primary dark:text-purple dark:hover:text-primary hover:bg-dark-purple dark:hover:bg-dark-purple" role="menuitem">Dashboard</a>
              </li>
              @endif --}}
          
              
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-primary dark:text-purple hover:text-primary hover:bg-dark-purple">
                  <button>Logout</button>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 md:z-30 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-gray-100 dark:bg-primary border-r-2 border-purple dark:border-secondary sm:translate-x-0" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-100 dark:bg-primary">
        <ul class="space-y-2 font-normal mt-4 md:font-medium text-sm md:text-lg">
           @yield('list-menu')
        </ul>
     </div>
  </aside>

  <div class="p-4 sm:ml-64">
    @yield('main')
 </div>
</div>

@endsection