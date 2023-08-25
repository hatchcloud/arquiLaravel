@extends('layouts.shell')

@section('title', 'Servicio')


@section('content')
    <section class=" container flex-col flex mx-auto px-4 sm:px-0 md:flex-row gap-10">
        <div class="md:w-1/2 bg-white mt-12">
            <h1>Reunión de Consulta</h1>
            <p>Moldeando según identidades culturales, funcionales y contextuales, brindando un diseño arquitectónico en
                sintonía con su entorno.</p>
            <h2>Gratis</h2>
            <p>Incluye</p>
            <ul>
                <li>Escuchar al cliente y tomar notas detalladas.</li>
                <li>Discutir el presupuesto, plazos y restricciones.</li>
                <li>Evaluar el sitio o espacio en cuestión.</li>
                <img src="{{ asset('img/service-01.png') }}" alt="Logo">
            </ul>
        </div>
        <div class="md:w-1/2 mt-12">
            <h2>Completar datos para la cita</h2>
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-500 text-sm font-normal mb-2 uppercase">Nombre</label>
                    <input name="name" type="text" id="name" class=" border w-full  p-1 rounded-md  " /><br />
                    @error('name')
                        <br>
                        <small>{{ $message }}</small>
                        <br>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="border w-full  p-1 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Email</label>
                    <input type="email" name="email" id="email" class="border w-full  p-1 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Estoy interesado
                        en :</label>
                    <select name="idProduct" id="idProduct" class="border w-full  p-1 rounded-md">
                        <option value="1">Reunión de Consulta</option>
                        <option value="2">Factibilidad y Concepto</option>
                        <option value="3">Diseño Arquitectónico</option>
                        <option value="4">Inspección en Obra</option>
                        <option value="5">LLave en Mano</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Fecha</label>
                    <input type="date" name="date" class="border w-full  p-1 rounded-md">
                </div>
                <div class="mb-4">
                    <span id="hour">
                        <label for="lHora10">10:00</label>
                        <input id="hour" type="radio"name="hour" value="10" checked="checked" />
                        <label for="lhora12">12:00</label>
                        <input id="hour" type="radio"name="hour" value="12" />
                        <label for="lhora16">16:00</label>
                        <input id="hour" type="radio"name="hour" value="16" />
                        <label for="lhora18">18:00</label>
                        <input id="hour" type="radio"name="hour" value="18" /></span><br />

                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Mensaje :</label>
                    <textarea name="message" rows="2" cols="20" id="message" style="height:64px;"
                        class="border w-full  p-1 rounded-md"></textarea><br />
                    @error('message')
                        <br>
                        <small>{{ $message }}</small>
                        <br>
                    @enderror

                </div>
                <button type="submit"
                    class=" bg-dark-900 hover:bg-dark-950 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Agendar</button>

            </form>

        </div>
    </section>




@endsection
