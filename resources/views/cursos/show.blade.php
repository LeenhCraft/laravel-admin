@extends('layouts.plantilla')
@section('titulo', 'Curso:.' . $idcurso)

@section('contenido')
    <h1>pagina para mostrar el curso</h1>
    <p>{{$idcurso}}</p>
@endsection
