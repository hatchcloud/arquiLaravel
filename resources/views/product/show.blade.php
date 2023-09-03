
@extends('layouts.shell')

@section('title', 'Servicio')


@section('content')
    <h1 class="bg-purple-400">Hola desde Package</h1>
    <p>Párametro enviado por path param {{$product->name}}</p>
@endsection
