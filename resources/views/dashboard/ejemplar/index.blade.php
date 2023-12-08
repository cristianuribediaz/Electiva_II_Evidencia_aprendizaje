@extends('dashboard.master')
@section('titulo','Ejemplar')
@include('layouts.navigation')
@section('contenido')
<main>
    <div class="container py-4">
        <div class="center"> <h1>Ejemplares Creados:</h1></div>
        <a href="{{ url('dashboard/ejemplar/create  ') }}" class="btn btn-primary btn-sm">Nuevo Ejemplar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Localizacion</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de modificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ejemplar as $ejemplar )
                    <tr>
                        <td>{{ $ejemplar->id }}</td>
                        <td>{{ $ejemplar->Codigo }}</td>   
                        <td>{{ $ejemplar->Localizacion }}</td>   
                        <td>{{ $ejemplar->created_at }}</td>   
                        <td>{{ $ejemplar->updated_at }}</td> 
                        <td><a href="{{ url('dashboard/ejemplar/'.$ejemplar->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/ejemplar/'.$ejemplar->id) }}" method="post">
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