@extends('dashboard.master')
@section('titulo','Autor')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Creando Autor:</h1></div>
    <form action="{{ route('autor.store') }}" method="post">
        @csrf
        <label for="cedula"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo">
        </div>
        <label for="name"> Nombre:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/autor') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection