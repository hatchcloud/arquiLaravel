
@extends('layouts.shell')

@section('title', 'Empresa Arquitectura')


@section('content')
    <section class="mx-auto container px-4  sm:px-0  flex flex-col justify-end items-center py-6 overflow-hidden	relative">
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
    </section>
    <section class="mx-auto container px-4  sm:px-0  flex flex-col md:flex-row  justify-end items-center py-6 overflow-hidden">
        <img src="{{ asset('img/section.png') }}" alt="Logo" class="brightness-75 rounded-3xl w-1/2">
        <div class="flex flex-col h-3/5 justify-between px-3 gap-3 w-1/2">
            <h2 class="  text-slate-900 text-2xl  md:text-3xl lg:text-3xl max-w-2xl mx-auto leading-normal font-semibold">Nuestra pasión es generar experiencias espaciales que buscan identidades culturales, funcionales y contextuales.</h2>
            <p class=" text-slate-800 max-w-2xl mx-auto" >Moldeando según identidades culturales, funcionales y contextuales, brindando un diseño arquitectónico en sintonía con su entorno.</p>
        </div>
    </section>
@endsection
