@extends('plantilla')
@section('titulo', 'Clientes')

@section("encabezado")

    <h1>Dundler Mifflin</h1>

@endsection

@section("contenido")

<table border= "2" width= 100%>
    <tr>
        <td>ID          .</td>
        <td>Nombre      .</td>
        <td>Antigüedad  .</td>
        <td>País        .</td>
    </tr>
    @foreach($datoClientes as $cliente)
    <tr>
        <td>{{$cliente ['idcliente']}}</td>
        <td>{{$cliente ['nombrecliente']}}</td>
        <td>{{$cliente ['antiguedad']}}</td>
        <td>{{$cliente ['pais']}}</td>
        
 
    </tr>
    @endforeach
</table>


@endsection


