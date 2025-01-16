@extends('layout.main_template')

@section('content')

<h1>Detalles de la cita</h1>
<h3>Cita: {{$cita->cita_id}}</h3>
<h3>Paciente: {{$cita->paciente_id}}</h3>
<h3>Medico: {{$cita->medico_id}}</h3>
<h3>Fecha: {{$cita->fecha}}</h3>
<h3>Hora: {{$cita->hora}}</h3>

<h3>Estado: {{$cita->estado}}</h3>

<
@endsection