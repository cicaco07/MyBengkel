@section('content')
<label class="relative w-100 h-40 block bg-cover bg-center border-3 border-purple-300 rounded-full cursor-pointer transition duration-1000 ease-in shadow">
    <input type="checkbox" class="hidden-checkbox" id="dark-mode" />
    <div class="absolute h-25 w-25 bg-center bg-no-repeat bg-cover rounded-full top-4 left-4 transition duration-800 ease-in shadow"
        style="background-image: url('/img/sun-behind-large-cloud-svgrepo-com.svg')"></div>
    <div class="absolute h-1 w-20 border-15 border-purple-400 rounded-full top-2 left-2 transition duration-800 ease-in shadow"></div>
</label>
@endsection

