@extends('layout.main_template')

@section('content')

<h1>Listado de Doctores</h1>

<!-- Botones de acción -->
<div class="action-buttons">
    <button class="btn btn-primary" onclick="window.location.href='{{ route('medicos.create') }}'">Registrar Médico</button>
   
</div>

<!-- Tabla de médicos -->
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>Nombre del Médico</th>
            <th>Especialidad</th>
            <th>Teléfono</th>
            <th>Horario Disponible</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicos as $c)
            <tr>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->especialidad }}</td>
                <td>{{ $c->telefono }}</td>
                <td>{{ $c->horario_disponible }}</td>
                <td>
                    <!-- Botón de editar -->
                    <button class="btn btn-info">
                        <a href="{{ route('medicos.edit', $c) }}">Editar</a>
                    </button>
                    <!-- Formulario para eliminar -->
                    <form action="{{ route('medicos.destroy', $c->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este médico?')">Eliminar</button>
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
    h1 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #4c91af;
        text-align: center;
        font-weight: bold;
    }

    /* Botones de acción */
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
        background-color: #c92236;
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
</style>
