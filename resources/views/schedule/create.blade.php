@extends('layouts.shell')

@section('title', 'Servicio')


@section('content')
    <section class=" container flex-col flex mx-auto px-4 sm:px-0 md:flex-row gap-20 py-10">
        <div class="md:w-1/2 bg-white  rounded-2xl p-6 flex flex-col gap-2">
            <h1 class=" text-xl font-semibold">Reunión de Consulta</h1>
            <p class=" text-gray-700">Moldeando según identidades culturales, funcionales y contextuales, brindando un diseño arquitectónico en
                sintonía con su entorno.</p>
            <h2 class=" text-zafiro-500 text-lg font-semibold">Gratis</h2>
            <p class=" ">Incluye</p>
            <ul>
                <li>Escuchar al cliente y tomar notas detalladas.</li>
                <li>Discutir el presupuesto, plazos y restricciones.</li>
                <li>Evaluar el sitio o espacio en cuestión.</li>
                <img src="{{ asset('img/service-01.png') }}" alt="Logo" class="w-full rounded-lg">
            </ul>
        </div>
        <div class="md:w-1/2 mt-12">
            <h2 class="text-xl font-semibold">Completar datos para la cita</h2>
            <form action="{{ route('schedule.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-500 text-sm font-normal mb-2 uppercase">Nombre</label>
                    <input name="name" type="text" id="name" class=" border w-full  p-2 rounded-md " value= "{{old('name')}}" /><br />
                    @error('name')
                        <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="border w-full  p-2 rounded-md" value= "{{old('phone')}}">
                    @error('phone')
                    <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Email</label>
                    <input type="email" name="email" id="email" class="border w-full  p-2 rounded-md" value= "marisol@gmail.com">
                    @error('email')
                    <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Estoy interesado
                        en :</label>
                    <select name="idProduct" id="idProduct" class="border w-full  p-2 rounded-md">
                        <option value="">Seleccione el servicio</option>
                        @foreach($products as $product)
                            <option value={{$product->id}} @if (old('idProduct') == $product->id)selected
                            @endif>{{$product->package_name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Fecha</label>
                    <input type="date" name="date" class="border w-full  p-2 rounded-md">
                    @error('date')
                    <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <span id="hour">

                        @foreach($hours as $hour)
                        <label for={{$hour->id}}>{{$hour->busines_hour}}</label>
                        <input id="hour" type="radio"  name="hour" value={{$hour->id}} @if (old('hour') == $hour->id) checked @endif/>
                        @endforeach
                    </span>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Mensaje :</label>
                    <textarea name="message" rows="2" cols="20" id="message" style="height:64px;"
                        class="border w-full  p-2 rounded-md" value = "{{old('message')}}" ></textarea><br />
                    @error('message')
                        <br>
                        <small>{{ $message }}</small>
                        <br>
                    @enderror

                </div>
                <button type="submit"
                    class=" bg-dark-900 hover:bg-dark-950 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline rounded-full">Agendar</button>

            </form>

        </div>
    </section>




@endsection
