@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Pacientes</h1>

<!-- Mostrar los mensajes de error globales si existen -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
   
    <input type="text" name="nombre" value="{{ old('nombre') }}">
    @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" value="{{ old('apellido') }}">
    @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="correo">Correo</label>
    <input type="text" name="correo" value="{{ old('correo') }}">
    @error('correo')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="telefono">Teléfono</label>
    <input type="number" name="telefono" value="{{ old('telefono') }}">
    @error('telefono')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="direccion">Dirección</label>
    <input type="text" name="direccion" value="{{ old('direccion') }}">
    @error('direccion')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Registrar</button>
    <a href="{{ route('pacientes.index') }}" class="cancel-button">Cancelar</a>
</form>

<style>
    /* Estilo global */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        color: #333;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #006d77;
        margin-bottom: 20px;
    }

    /* Contenedor principal */
    form {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    form label {
        display: block;
        font-size: 1rem;
        margin: 8px 0;
        color: #005f73;
    }

    /* Estilo de los campos de formulario */
    form input[type="text"],
    form input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    form input[type="text"]:focus,
    form input[type="number"]:focus {
        outline: none;
        border-color: #006d77;
        box-shadow: 0 0 5px rgba(0, 109, 119, 0.7);
    }

    /* Estilo para los botones */
    form button {
        background-color: #006d77;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 15px;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #005f73;
    }

    .cancel-button {
        display: block;
        text-align: center;
        background-color: #cccccc;
        color: #333;
        padding: 10px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 1rem;
        margin-top: 15px;
        transition: background-color 0.3s ease;
    }

    .cancel-button:hover {
        background-color: #b3b3b3;
    }

    /* Estilo para los mensajes de error */
    .alert.alert-danger {
        background-color: #ffe6e6;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #f44336;
    }

    .alert.alert-danger ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .alert.alert-danger li {
        color: #f44336;
        font-size: 1rem;
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 768px) {
        form {
            width: 90%;
        }
    }
</style>

@endsection
