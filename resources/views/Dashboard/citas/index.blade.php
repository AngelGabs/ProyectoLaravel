@extends('layout.main_template')


@section('content')
<h1>Listado de Citas</h1>

<!-- Mensaje de estado si existe -->
@if (session('status'))
    <div class="status-message">
        <p>{{ session('status') }}</p>
    </div>
@endif

<!-- Botón para crear cita -->
<div class="action-buttons">
    <button class="btn btn-primary" onclick="window.location.href='{{ route('citas.create') }}'">Crear Cita</button>
</div>

<!-- Tabla de citas -->
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>Paciente </th>
            <th>Médico</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citas as $p)
            <tr>
                <td>{{ $p->paciente->nombre }}</td>
                <td>{{ $p->medico->nombre }}</td>
                <td>{{ $p->fecha_cita ?? 'sin fecha' }}</td>
                <td>{{ $p->hora_cita ?? 'sin hora' }}</td>
                <td>
                    <!-- Botones de acción -->
                    <button class="btn btn-info">
                        <a href="{{ route('citas.edit', $p) }}">Mostrar</a>
                    </button>

                    <button class="btn btn-danger">
                        <a href="{{ route('citas.showDeleteForm', $p) }}">Eliminar</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Paginación -->
{{ $citas->links() }}
@endsection

<!-- CSS Adicional -->
<style>
    /* Estilo general */
    h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #4c91af;
        text-align: center;
        font-weight: bold;
    }

    /* Botón de acción principal centrado */
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
    }

    .action-buttons button:hover {
        opacity: 0.9;
    }

    /* Estilo de los botones dentro de la tabla */
    .table button {
        padding: 8px 16px;
        margin-right: 10px;
        font-size: 1em;
        font-weight: bold;
        border-radius: 5px;
        display: inline-block;
        cursor: pointer;
    }

    .btn-info {
        background-color: #75c5d3; /* Azul claro */
    }

    .btn-danger {
        background-color: #220004;
    }

    .btn-info:hover {
        background-color: #5ca6b4; /* Azul ligeramente más oscuro */
    }

    .btn-danger:hover {
        background-color: #b02a37; /* Rojo ligeramente más oscuro */
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

    /* Paginación */
    .pagination {
        justify-content: center;
        margin-top: 30px;
    }
</style>
