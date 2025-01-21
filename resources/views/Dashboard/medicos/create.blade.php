@extends('layout.main_template')

@section('content')

<h1>Registrar Médico</h1>

<form action="{{ route('medicos.store') }}" method="POST" class="form-container">
    @csrf

    <label for="nombre">Nombre del Médico</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
    @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="especialidad">Especialidad</label>
    <input type="text" name="especialidad" id="especialidad" value="{{ old('especialidad') }}">
    @error('especialidad')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="telefono">Teléfono</label>
    <input type="number" name="telefono" id="telefono" value="{{ old('telefono') }}">
    @error('telefono')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="horario_disponible">Horario Disponible</label>
    <input type="text" name="horario_disponible" id="horario_disponible" value="{{ old('horario_disponible') }}">
    @error('horario_disponible')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-buttons">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="{{ route('medicos.index') }}" class="btn btn-secondary cancel-link">Cancelar</a>
    </div>
</form>

@endsection

<!-- CSS Adicional -->
<style>
    /* Estilo general */
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

    /* Estilo del formulario */
    .form-container {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        display: block;
        font-size: 1rem;
        margin: 8px 0;
        color: #005f73;
    }

    .form-container input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    .form-container input:focus {
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
        border-radius: 50px;
        cursor: pointer;
        border: none;
        display: inline-block;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #5d9baf; /* Azul suave */
        color: white;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #4a8a9b;
    }

    .btn-secondary {
        background-color: #6b8e23; /* Verde suave */
        color: white;
    }

    .btn-secondary:hover {
        background-color: #4c7023;
    }

    .cancel-link {
        text-decoration: none;
        color: white;
    }

    .cancel-link:hover {
        color: #ffdddd;
    }

    /* Estilo para el mensaje de error (si lo hay) */
    .alert-danger {
        background-color: #ffe6e6;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f44336;
        color: #721c24;
        font-size: 1rem;
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 768px) {
        .form-container {
            width: 90%;
        }
    }
</style>
