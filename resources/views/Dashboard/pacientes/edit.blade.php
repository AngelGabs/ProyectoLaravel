@extends('layout.main_template')

@section('content')

<h1>Editar Paciente</h1>

<!-- Formulario para editar paciente -->
<form action="{{ route('pacientes.update', $paciente->id) }}" method="POST" class="form-container">
    @csrf
    @method('PUT')

    <!-- Campo Nombre -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre', $paciente->nombre) }}">
    @error('nombre')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror

    <!-- Campo Apellido -->
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" placeholder="Ingrese el apellido" value="{{ old('apellido', $paciente->apellido) }}">
    @error('apellido')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror

    <!-- Campo Correo -->
    <label for="correo">Correo:</label>
    <input type="email" name="correo" id="correo" placeholder="ejemplo@correo.com" value="{{ old('correo', $paciente->correo) }}">
    @error('correo')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror

    <!-- Campo Teléfono -->
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" placeholder="Ingrese el teléfono" value="{{ old('telefono', $paciente->telefono) }}" pattern="\d*" maxlength="10">
    @error('telefono')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror

    <!-- Campo Dirección -->
    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" placeholder="Ingrese la dirección" value="{{ old('direccion', $paciente->direccion) }}">
    @error('direccion')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror

    <!-- Botones -->
    <div class="form-buttons">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary cancel-link">Cancelar</a>
    </div>
</form>

@endsection

<!-- CSS Adicional -->
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f6f9;
        color: #333;
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #4c91af;
        text-align: center;
        font-weight: bold;
    }

    .form-container {
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

    form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
    }

    form input:focus {
        outline: none;
        border-color: #006d77;
        box-shadow: 0 0 5px rgba(0, 109, 119, 0.7);
    }

    .form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .btn {
        padding: 12px 30px;
        font-size: 1.1em;
        border-radius: 8px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #5d9baf;
        color: white;
    }

    .btn-secondary {
        background-color: #4caf50;
        color: white;
    }

    .btn-primary:hover,
    .btn-secondary:hover {
        opacity: 0.8;
    }

    .cancel-link {
        color: white;
        text-decoration: none;
    }

    .alert-danger {
        padding: 10px;
        margin-top: 5px;
        background-color: #f8d7da;
        border-radius: 5px;
        border: 1px solid #f44336;
        color: #721c24;
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .form-container {
            width: 90%;
        }
    }
</style>
