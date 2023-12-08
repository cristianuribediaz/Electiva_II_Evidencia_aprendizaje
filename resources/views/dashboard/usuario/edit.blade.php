@extends('dashboard.master')
@section('titulo','Usuario')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Editando Usuario:</h1></div>
    <form action="{{ url('dashboard/usuario/'.$usuario->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo" value="{{ $usuario->Codigo }}">
        </div>
        <label for="name"> Nombre:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre" value="{{ $usuario->Nombre }}">
        </div>
        <label for="direccion"> Direccion:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="direccion" value="{{ $usuario->Direccion }}">
        </div>
        <label for="telefono"> Telefono:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="telefono" value="{{ $usuario->Telefono }}">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/usuario') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection