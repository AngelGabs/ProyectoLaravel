@extends('layout.main_template')

@section('content')

<h1>Editar Paciente</h1>

<!-- Mostrar errores si los hay -->
@if ($errors->any())
    <div class="error-messages">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- Formulario para editar paciente -->
<form action="{{ route('pacientes.update', $paciente->id) }}" method="POST" class="form-container">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $paciente->nombre }}" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="{{ $paciente->apellido }}" required>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" value="{{ $paciente->correo }}">

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $paciente->telefono }}">

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $paciente->direccion }}">

    <div class="form-buttons">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <button class="btn btn-secondary"><a href="{{ route('pacientes.index') }}" class="cancel-link">Cancelar</a></button>
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

    /* Contenedor del formulario */
    .form-container {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Estilo de los campos de formulario */
    form label {
        display: block;
        font-size: 1rem;
        margin: 8px 0;
        color: #005f73;
    }

    form input[type="text"],
    form input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    form input[type="text"]:focus,
    form input[type="email"]:focus {
        outline: none;
        border-color: #006d77;
        box-shadow: 0 0 5px rgba(0, 109, 119, 0.7);
    }

    /* Estilo de los botones */
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
        background-color: #5d9baf; /* Azul suave */
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

    /* Estilo del enlace de cancelar */
    .cancel-link {
        color: white;
        text-decoration: none;
    }

    /* Estilo para los mensajes de error */
    .error-messages {
        background-color: #ffe6e6;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f44336;
    }

    .error-messages p {
        color: #f44336;
        margin: 0;
        font-size: 1rem;
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 768px) {
        .form-container {
            width: 90%;
        }
    }
</style>

