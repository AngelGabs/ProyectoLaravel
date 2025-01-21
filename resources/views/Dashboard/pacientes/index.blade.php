@extends('layout.main_template')

@section('content')

<h1>Listado de Pacientes</h1>
<!--AQUI-->

<!-- Botones de acción -->
<div class="action-buttons">
    <button class="btn btn-primary" onclick="window.location.href='{{ route('pacientes.create') }}'">Registrar Paciente</button>
    
</div>

<!-- Tabla de pacientes -->
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->apellido }}</td>
                <td>{{ $paciente->correo }}</td>
                <td>{{ $paciente->telefono }}</td>
                <td>{{ $paciente->direccion }}</td>
                <td>
                    <!-- Botones de acción -->
                    <button class="btn btn-info">
                        <a href="{{ route('pacientes.edit', $paciente) }}" class="action-link">Editar</a>
                    </button>
                    <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este paciente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

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

    /* Contenedor de los botones de acción */
    .action-buttons {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
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
        margin-right: 10px;
    }

    .action-buttons button:hover {
        opacity: 0.9;
    }

    /* Estilo de la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 30px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    th, td {
        padding: 14px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4c87af;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    td {
        background-color: #f9f9f9;
        font-size: 1.1em;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Estilo para los botones dentro de la tabla */
    .btn {
        padding: 8px 16px;
        font-size: 1em;
        font-weight: bold;
        border-radius: 5px;
        display: inline-block;
        cursor: pointer;
    }

    .btn-info {
        background-color: #75c5d3; /* Azul claro */
    }

    .btn-info:hover {
        background-color: #5ca6b4;
    }

    .btn-danger {
        background-color: #b02a37; /* Rojo oscuro */
        color: white;
        border: none;
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

    /* Paginación */
    .pagination {
        justify-content: center;
        margin-top: 30px;
    }

    /* Estilo del mensaje de estado */
    .status-message {
        background-color: #787d7f;
        color: white;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 30px;
        font-weight: bold;
        text-align: center;
    }
</style>
