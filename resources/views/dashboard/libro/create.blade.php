@extends('dashboard.master')
@section('titulo','Libro')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Registrando nuevo libro:</h1></div>
    <form action="{{ route('libro.store') }}" method="post">
        @csrf
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo">
        </div>
        <label for="libro"> Nombre del Libro:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="libro">
        </div>
        <label for="isbn"> ISBN:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="isbn">
        </div>
        <label for="editorial"> Nombre de la Editorial:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="editorial">
        </div>
        <label for="pag"> Numro de paginas:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="paginas">
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/usuario') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection