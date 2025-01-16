@extends('layout.main_template')

@section('content')
@include('fragments.formstyles')

<h1>Create de Citas</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

*/
PRODUCTOS*/

<form action="{{route('citas.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">ID del Paciente</label>
    <input name="paciente_id">
    <label for="">Nombre del Médico</label>
<select name="medico_id">
    <option value="">Selecciona...</option>
    @foreach ($medicos as $medico)
        <option value="{{ $medico->id }}">{{ $medico->name }}</option>
    @endforeach
</select>



    <label for="">Fecha</label>
    <input type="number" name="stock">
    
    <label for="">Hora</label>
    <input type="text" name="unit_price">

    <label for="">Estado</label>
    <input type="text" name="estado">

    <button type="submit">Registrar</button>
</form>

@endsection 