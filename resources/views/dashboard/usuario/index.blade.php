@extends('dashboard.master')
@section('titulo','Usuario')
@include('layouts.navigation')
@section('contenido')
<main>
    <div class="container py-4">
        <div class="center"> <h1>Usuarios Creados:</h1></div>
        <a href="{{ url('dashboard/usuario/create  ') }}" class="btn btn-primary btn-sm">Nuevo Usuario</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de modificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuario as $usuario )
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->Codigo }}</td>   
                        <td>{{ $usuario->Nombre }}</td>   
                        <td>{{ $usuario->Telefono }}</td>
                        <td>{{ $usuario->Direccion }}</td>
                        <td>{{ $usuario->created_at }}</td>   
                        <td>{{ $usuario->updated_at }}</td> 
                        <td><a href="{{ url('dashboard/usuario/'.$usuario->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/usuario/'.$usuario->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button class="bi bi-eraser-fill" type="submit" ></button>                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</main>
@endsection