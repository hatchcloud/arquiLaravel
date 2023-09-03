
@extends('layouts.shell')

@section('title', 'Citas Pentientes')


@section('content')
    <section class="h-75vh flex items-center  justify-start flex-col">
        <div class=" bg-white p-3  rounded-2xl  my-10 w-1/2">
            <h1 class=" text-lg font-semibold   ">Reunión de Consulta</h1>

            <table>
                <thead>
                  <tr class=" text-left">
                    <th >ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $item)
                    <tr class="tabla">
                      <td class="id">{{$item->id}}</td>
                      <td class=" px-3" >{{$item->name}}</td>
                      <td class=" px-3">{{$item->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
        <div class=" flex items-center justify-center flex-col">
            {{$appointments->links()}}
        </div>

    </section>
@endsection
