
@extends('layouts.shell')

@section('title', 'Servicio')


@section('content')
<section class="h-75vh flex items-center  justify-start flex-col">
    <div class=" bg-white p-3  rounded-2xl  my-10 w-1/2  card-show">
        <img src="{{ asset('img/services/' . $product->id . '.png') }}" alt={{$product->package_name}} class=" rounded-md  h-60 w-full ">
        <h1 class=" font-semibold text-emerald-700 text-lg">¡Creación de cita exitosa!</h1>
        <h2>{{$product->package_name}}</h2>
        <h3>{{$appointment->name}}, gracias por dar el primer paso</h3>
        <p>Te esperamos el día {{$appointment->date}} a las {{$hour->busines_hour}} </p>

        <div class=" flex mt-10 justify-between">
            <form action="{{ route('schedule.destroy', $appointment)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class=" bg-red-900 hover:bg-red-950 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline rounded-full">Cancelar Cita</button>
                </form>
                <a href="{{route('schedule.edit', $appointment)}}"class=" bg-slate-200 hover:bg-slate-300 text-slate-900 font-bold py-2 px-4 focus:outline-none focus:shadow-outline rounded-full">Editar Cita</a>
        </div>

    </div>
</section>
@endsection


