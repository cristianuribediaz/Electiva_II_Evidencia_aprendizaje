@extends('dashboard.master')
@section('titulo','Libro')
@include('layouts.navigation')
@section('contenido')

<div class="container py-4">
    <div class="center"> <h1>Editando Libro:</h1></div>
    <form action="{{ url('dashboard/libro/'.$libro->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="codigo"> Codigo:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="codigo" value="{{ $libro->Codigo }}">
        </div>
        <label for="libro"> Nombre del Libro:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="libro" value="{{ $libro->Titulo }}">
        </div>
        <label for="isbn"> ISBN:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="isbn" value="{{ $libro->ISBN }}">
        </div>
        <label for="editorial"> Nombre de la Editorial:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="editorial" value="{{ $libro->Editorial }}">
        </div>
        <label for="pag"> Numero de paginas:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="paginas" value="{{ $libro->Paginas }}" >
        </div>
        <div class="col s6">
            <button class="btn btn-success btn-sm" type="submit">Guardar</button>
            <a href="{{ url('dashboard/libro') }}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>

    
    </form>
</div>
@endsection