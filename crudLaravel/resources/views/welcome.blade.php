
@extends('theme.base')

@section('content')

<div class="container py-5 text-center">
    <h1>Listado de clientes</h1>

    <a href="{{ route('client.create') }}" class="btn btn-primary">Crear cliente</a>
        
    <table class="table .table-striped">
        <thead>
            <th>Nombre</th>
            <th>Deuda</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </thead>
        <tbody>
           <tr>
            <td>Felinos</td>
            <td>50.00</td>
            <td>comentario 1</td>
            <td>Editar-Eliminar</td>
           </tr>
        </tbody>

        
    </table>

</div>
@endsection