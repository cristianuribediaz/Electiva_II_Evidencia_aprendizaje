@extends('dashboard.master')
@section('titulo','Ejemplar')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Registrando nuevo ejemplar:</h1></div>
    <form action="{{ route('ejemplar.store') }}" method="post">
        @csrf
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo">
        </div>
        <label for="localizacion"> Localizacion:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="localizacion">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/ejemplar') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection