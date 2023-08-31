<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
    <body class="h-screen bg-white">
        <header class="mx-auto container px-4  sm:px-0  flex  justify-between py-4">
            <a href="{{ route('home.index') }}" class="font-bold uppercase text-gray-600 text-sm"><img
                    src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
            <nav class="flex gap-4 justify-center items-center text-dark-900 text-lg">
                <a href="">Servicios</a>
                <a href="">Nosotros</a>
            </nav>
            <a href="{{ route('product.create') }}"
                class="uppercase bg-dark-900 hover:bg-gray-600 flex rounded-full px-8 py-3 transition duration-300  justify-center items-center text-white text-lg">Agendar
                Cita</a>
            @section('navbar')
            @show
        </header>
        <div class=" bg-dark-100">
            @yield('content')
        </div>
        @section('footer')
    </body>
</html>
