<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        html.dark {
            background-color: #0F172A;
        }

        html.light {
            background-color: #ffffff;
        }
    </style>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="top-2.5 right-24 class z-50 fixed">
        <input type="checkbox" id="dark-mode-toggle" class="hidden-checkbox">
        <label for="dark-mode-toggle" class="toggle"></label>
    </div>
    @yield('content')
    @yield('js')
</body>

</html>