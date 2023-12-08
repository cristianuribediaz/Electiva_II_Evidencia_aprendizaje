@extends('dashboard.master')
@section('titulo','Libro')
@include('layouts.navigation')
@section('contenido')
<main>
    <div class="container py-4">
        <div class="center"> <h1>Libros Creados:</h1></div>
        <a href="{{ url('dashboard/libro/create  ') }}" class="btn btn-primary btn-sm">Nuevo libro</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Titulo</th>
                    <th>ISBN</th>
                    <th>Editorial</th>
                    <th>Paginas</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de modificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libro as $libro )
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->Codigo }}</td>   
                        <td>{{ $libro->Titulo }}</td> 
                        <td>{{ $libro->ISBN }}</td>
                        <td>{{ $libro->Editorial }}</td> 
                        <td>{{ $libro->Paginas }}</td> 
                        <td>{{ $libro->created_at }}</td>   
                        <td>{{ $libro->updated_at }}</td> 
                        <td><a href="{{ url('dashboard/libro/'.$libro->id.'/edit') }}" class="bi bi-pencil"></a></td>
                        <td>
                            <form action="{{ url('dashboard/libro/'.$libro->id) }}" method="post">
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