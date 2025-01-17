@extends('layout.main_template')

@section('content')

<h1>Detalles del Área</h1>
<h3>ID del Área: {{ $area->id }}</h3>
<h3>Nombre del Área: {{ $area->nombre }}</h3>
<h3>Descripción: {{ $area->descripcion }}</h3>

@endsection
