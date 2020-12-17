@extends('plantilla')

@section('titulo', 'Productos')
@section("encabezado")

    <h1>Dundler Mifflin</h1>

@endsection

@section("contenido")

<table border= "2" width = 100%>
    <tr>
        <th>ID          .</th>
        <th>Nombre      .</th>
        <th>Descripción  .</th>
        <th>Fabricante  .</th>
        <th>Precio  .</th>
        <th>Stock        .</th>
    </tr>
    @foreach($datoProducto as $producto)
    <tr>
        <td>{{$producto ['idproducto']}}</td>
        <td>{{$producto ['nombreProducto']}}</td>
        <td>{{$producto ['descripcion']}}</td>
        <td>{{$producto ['fabricante']}}</td>
        <td>{{$producto ['precio']}}</td>
        <td>{{$producto ['stock']}}</td>
        
    </tr>
    @endforeach
</table>


@endsection
