@extends('layouts.shell')

@section('title', 'Edit')


@section('content')
    <section class=" container flex-col flex mx-auto px-4 sm:px-0 md:flex-row gap-20 py-10 ">

        <div class="md:w-1/2 m-auto bg-white rounded-lg p-3 shadow-md">
            <h2 class="text-xl font-semibold text-center mb-3">Actualizar datos para la cita</h2>
            <form action="{{ route('schedule.update', $appointment) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-500 text-sm font-normal mb-2 uppercase">Nombre</label>
                    <input name="name" type="text" id="name" class=" border w-full  p-2 rounded-md " value= "{{old('name', $appointment->name )}}" /><br />
                    @error('name')
                        <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="border w-full  p-2 rounded-md" value= "{{old('phone',  $appointment->phone)}}">
                    @error('phone')
                    <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Email</label>
                    <input type="email" name="email" id="email" class="border w-full  p-2 rounded-md" value= "{{old('email',  $appointment->email)}}">
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
                            <option value={{$product->id}} @if (old('idProduct') == $product->id  || $product->id == $appointment->product_package_id )selected
                            @endif>{{$product->package_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Fecha</label>
                    <input type="date" name="date" class="border w-full  p-2 rounded-md" value= "{{old('date',  $appointment->date)}}">
                    @error('date')
                    <small class=" font-semibold text-xs text-red-700">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <span id="hour">

                        @foreach($hours as $hour)
                        <label for={{$hour->id}}>{{$hour->busines_hour}}</label>
                        <input id="hour" type="radio"  name="hour" value={{$hour->id}} @if (old('hour') == $hour->id || $hour->id == $appointment->business_hours_id) checked @endif/>
                        @endforeach
                    </span>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-500 text-sm  font-normal mb-2 uppercase">Mensaje :</label>
                    <textarea name="message" rows="2" cols="20" id="message" style="height:64px;"
                        class="border w-full  p-2 rounded-md" value = "{{old('message', $appointment->message)}}" ></textarea><br />
                    @error('message')
                        <br>
                        <small>{{ $message }}</small>
                        <br>
                    @enderror

                </div>
                <button type="submit" class=" bg-dark-900 hover:bg-dark-950 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline rounded-full">Agendar</button>

            </form>

        </div>
    </section>




@endsection
