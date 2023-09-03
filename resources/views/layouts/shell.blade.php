<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
    <body class=" bg-white flex flex-col justify-between">
        <header class="mx-auto container px-4  sm:px-0  flex  justify-between py-4">
            <a href="{{ route('home.index') }}" class="font-bold uppercase text-gray-600 text-sm"><img
                    src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
            <nav class="flex gap-4 justify-center items-center text-dark-900 text-lg">
                <a href="">Servicios</a>
                <a href="">Nosotros</a>
                <a href="{{ route('schedule.index') }}">Agenda</a>
            </nav>
            @if(Route::currentRouteName() == 'home.index')
            <a href="{{ route('schedule.create') }}"
                class="uppercase bg-dark-900 hover:bg-gray-600 flex rounded-full px-8 py-3 transition duration-300  justify-center items-center text-white text-lg">Agendar
                Cita</a>
            @endif
            @if(Route::currentRouteName() !== 'home.index')
            <a href="{{ route('home.index') }}"
                class="uppercase  bg-slate-200 hover:bg-slate-300 text-slate-900 flex rounded-full px-8 py-3 transition duration-300  justify-center items-center  text-lg">Regresar</a>
            @endif
            @section('navbar')
            @show
        </header>
        <div class=" bg-dark-100 h-full">
            @yield('content')
        </div>

        <footer class=" bg-dark-950 h-40">
            <div class="mx-auto container px-4  sm:px-0  flex  justify-between py-4">
                <a href="{{ route('home.index') }}" class="font-bold uppercase text-gray-600 text-sm">
                    <img src="{{ asset('img/logo_w.svg') }}" alt="Logo" class="text-white"></a>
                <nav class="flex gap-4 justify-center items-center text-white text-lg">
                    <a href="">Servicios</a>
                    <a href="">Nosotros</a>
                    <a href="">Agenda</a>
                </nav>
            </div>
            @section('footer')
        </footer>

    </body>
</html>
