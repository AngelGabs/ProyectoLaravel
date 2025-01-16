@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Medicos</h1>

<form action="{{route('medicos.store')}}" method="POST">
    @csrf
    <label for="">Nombre del Medico</label>
<input type="text" name="nombre" required>

    <label for="">Especialidad</label>
    <input type="text" name="especialidad">

    <label for="">Telefono</label>
    <input type="number" name="telefono">

    <label for="">Horario Disponible</label>
    <input type="text" name="horario_disponible">

    <button type="submit">Registrar</button>
</form>

@endsection
