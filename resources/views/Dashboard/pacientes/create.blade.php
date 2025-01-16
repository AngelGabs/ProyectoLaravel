@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Pacientes</h1>

<form action="{{route('pacientes.store')}}" method="POST">
    @csrf
    <label for="">Nombre del paciente</label>
    <input type="text" name="nombre">

    <label for=""> Apellido</label>
    <input type="text" name="apellido">

    <label for="">Correo</label>
    <input type="text" name="correo">
    
    <label for="">Telefono</label>
    <input type="number" name="telefono">

    <label for="">Direccion</label>
    <input type="text" name="direccion">

    <button type="submit">Registrar</button>

    <button type="submit">Registrar</button>
</form>

@endsection 