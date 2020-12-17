@extends('plantilla')
@section('titulo', 'Inicio')

@section("encabezado")

    <h1>Dundler Mifflin</h1>

@endsection

@section('contenido')

    <form action="{{route('siestadefinida')}}" method="POST">
        @csrf
        <label for="fecha">fecha</label>
        <input type="date"><br>
        <label for="nombreProducto">Nombre del producto</label>
        <input type ="text" name="nombreProducto"><br>
        <label for="nombreCliente">Nombre del cliente</label>
        <input type="text" name="nombreCliente"><br>
        <label for="nombreEmpleado">Nombre del vendedor</label>
        <input type="text" name="nombreEmpleado"><br>
        <label for="cantidad">Cantidad a vender</label>
        <input type="text" name="cantidad"><br>
        <button type="submit" class="btn btn-primary btn-block">Agregar</button>    
    
        @endsection