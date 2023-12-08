@extends('dashboard.master')
@section('titulo','Usuario')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Registrando nuevo usuario:</h1></div>
    <form action="{{ route('usuario.store') }}" method="post">
        @csrf
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo">
        </div>
        <label for="name"> Nombre:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre">
        </div>
        <label for="direccion"> Direccion:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="direccion">
        </div>
        <label for="telefono"> Telefono:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/usuario') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection