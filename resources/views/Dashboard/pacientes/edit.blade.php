@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Pacientes</h1>
*/
Brands*/
<form action="{{route('pacientes.update', $paciente->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nombre</label>
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
</form>

@endsection 