
@extends('layouts.shell')

@section('title', 'Empresa Arquitectura')


@section('content')

    <section class="bg-white">
        <div class="mx-auto container px-4  sm:px-0  flex flex-col justify-end items-center py-6 overflow-hidden	relative">
            <img src="{{ asset('img/hero.png') }}" alt="Logo" class="bg-hero brightness-75 rounded-3xl">
        <div class="absolute flex flex-col h-3/5 justify-between px-3">
            <h1 class=" text-white text-3xl  md:text-4xl lg:text-6xl max-w-4xl mx-auto text-center leading-normal font-semibold">Diseñamos experiencias espaciales </h1>
            <div class="flex justify-end gap-3 pb-6 px-3">
                <a href=""class="bg-dark-900 hover:bg-gray-600 flex rounded-full px-8 py-3 transition duration-300  justify-center items-center text-white text-lg">
                Servicios
                <img src="{{ asset('img/arrow.svg') }}" alt="arrow">
                </a>
            </div>
        </div>

        </div>

    </section>
    <section class=" bg-white">
        <div class="w-full mx-auto container px-4  sm:px-0  flex flex-col md:flex-row  justify-end items-center py-6 overflow-hidden">
            <img src="{{ asset('img/section.png') }}" alt="Logo" class="brightness-75 rounded-3xl w-1/2">
            <div class="flex flex-col h-3/5 justify-between px-3 gap-3 w-1/2">
                <h2 class="  text-slate-900 text-2xl  md:text-3xl lg:text-3xl max-w-2xl mx-auto leading-normal font-semibold">Nuestra pasión es generar experiencias espaciales que buscan identidades culturales, funcionales y contextuales.</h2>
                <p class=" text-slate-800 max-w-2xl mx-auto" >Moldeando según identidades culturales, funcionales y contextuales, brindando un diseño arquitectónico en sintonía con su entorno.</p>
            </div>
        </div>
    </section>
    <section class="mx-auto container px-4  sm:px-0  flex flex-col   justify-end items-center py-20 overflow-hidden  gap-8">
        <h2 class=" text-xl  md:text-2xl lg:text-4xl max-w-4xl mx-auto text-center leading-normal font-semibold ">Nuestros servicios </h2>
        <ul class="flex gap-3 justify-between w-full">
            @foreach ($packageData as $package)
            <div class=" bg-white rounded-2xl  p-5 w-full flex flex-col justify-between gap-1">
                <div>
                    <a href="" class="font-semibold text-xl">{{$package->package_name}}</a>
                    <p class=" text-zafiro-500 font-semibold">{{$package->range}}</p>
                </div>
                <img src="{{ asset('img/services/' . $package->id . '.png') }}" alt={{$package->package_name}} class="brightness-75 rounded-xl  h-40 w-full ">
                <div class="flex justify-end">
                    <button>Agenda Cita</button>
                </div>
            </div>
            @endforeach
        </ul>
    </section>
    <section class=" bg-white">
        <div class="w-full mx-auto container px-4  sm:px-0  flex flex-col  justify-end items-center  py-20 overflow-hidden gap-4">
            <p class=" max-w-2xl">
                “Gracias a IM studio, mi casa ahora es un oasis de diseño y funcionalidad. Han sabido captar mi estilo y necesidades, creando un espacio que supera todas mis expectativas. ¡Increíble trabajo!”
            </p>
            <div class=" mt-3 flex gap-3">
                <img src="{{ asset('img/estrella.png') }}" alt="rate">
                <img src="{{ asset('img/estrella.png') }}" alt="rate">
                <img src="{{ asset('img/estrella.png') }}" alt="rate">
                <img src="{{ asset('img/estrella.png') }}" alt="rate">
                <img src="{{ asset('img/estrella.png') }}" alt="rate">
            </div>
            <img src="{{ asset('img/referencia.png') }}" alt="avatar" class=" rounded-full">
        </div>
    </section>
@endsection
