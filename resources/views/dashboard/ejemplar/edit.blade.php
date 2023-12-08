@extends('dashboard.master')
@section('titulo','Ejemplar')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Editando Ejemplar:</h1></div>
    <form action="{{ url('dashboard/ejemplar/'.$ejemplar->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo" value="{{ $ejemplar->Codigo }}">
        </div>
        <label for="localizacion"> Localizacion:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="localizacion" value="{{ $ejemplar->Localizacion }}">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/ejemplar') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection