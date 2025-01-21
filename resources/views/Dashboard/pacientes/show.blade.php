@extends('layout.main_template')

@section('content')

<h1>Detalles del Paciente</h1>

<!-- Detalles del paciente -->
<div class="paciente-details">
    <div class="paciente-image">
        <!-- Mostrar la imagen del paciente, si existe -->
        @if($paciente->imagen)
            <img src="{{ asset('storage/' . $paciente->imagen) }}" alt="Imagen del paciente" style="max-width: 200px; height: auto;">
        @else
            <span>No disponible</span>
        @endif
    </div>

    <div class="paciente-info">
        <p><strong>ID:</strong> {{ $paciente->id }}</p>
        <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
        <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
        <p><strong>Correo:</strong> {{ $paciente->correo }}</p>
        <p><strong>Teléfono:</strong> {{ $paciente->telefono }}</p>
        <p><strong>Dirección:</strong> {{ $paciente->direccion }}</p>
    </div>
</div>

<!-- Botones de acción -->
<div class="action-buttons">
    <button class="btn btn-info">
        <a href="{{ route('pacientes.edit', $paciente) }}" class="action-link">Editar</a>
    </button>
    <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este paciente?')">Eliminar</button>
    </form>
    <button class="btn btn-secondary">
        <a href="{{ route('pacientes.index') }}" class="action-link">Volver a la lista</a>
    </button>
</div>

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

    .paciente-details {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .paciente-image {
        flex: 1;
        text-align: center;
    }

    .paciente-info {
        flex: 2;
        padding-left: 20px;
    }

    .paciente-info p {
        font-size: 1.1em;
        margin: 8px 0;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .action-buttons button {
        color: white;
        background-color: #5d9baf; /* Azul suave */
        text-decoration: none;
        padding: 12px 30px;
        border-radius: 50px;
        display: inline-block;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;
        border: none;
    }

    .action-buttons button:hover {
        opacity: 0.9;
    }

    .btn-danger {
        background-color: #b02a37; /* Rojo oscuro */
        color: white;
    }

    .btn-danger:hover {
        background-color: #d83249; /* Rojo más oscuro */
    }

    .action-link {
        color: white;
        text-decoration: none;
    }

    .action-link:hover {
        color: #ffdddd;
    }

</style>
