@extends('layout.main_template')

@section('content')
    <h1>Crear Cita</h1>

    @if ($errors->any())
        <div class="error-messages">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <label for="paciente_id">Paciente:</label>
        <select name="paciente_id" id="paciente_id" required>
            <option value="">Seleccione un paciente</option>
            @foreach ($pacientes as $paciente)
                <option value="{{ $paciente->id }}">{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
            @endforeach
        </select>
        <br>

        <label for="medico_id">Médico:</label>
        <select name="medico_id" id="medico_id" required>
            <option value="">Seleccione un médico</option>
            @foreach ($medicos as $medico)
                <option value="{{ $medico->id }}">{{ $medico->nombre }} ({{ $medico->especialidad }})</option>
            @endforeach
        </select>
        <br>

        <label for="fecha_cita">Fecha de la Cita (YYYY-MM-DD):</label>
        <input type="date" id="fecha_cita" name="fecha_cita" placeholder="Ejemplo: 2025-01-16">
        <br>

        <label for="hora_cita">Hora de la Cita (HH:MM):</label>
        <input type="text" id="hora_cita" name="hora_cita" placeholder="Ejemplo: 14:30">
        <br>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado" required>
            <option value="Pendiente" selected>Pendiente</option>
            <option value="Completada">Completada</option>
            <option value="Cancelada">Cancelada</option>
        </select>
        <br>

        <button type="submit">Crear Cita</button>

        <a href="{{ route('citas.index') }}" class="cancel-button">Cancelar</a>
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
        form select,
        form input[type="date"],
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        form input[type="text"]:focus,
        form select:focus,
        form input[type="date"]:focus {
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

        /* Estilo para el enlace de "Cancelar" */
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
            form {
                width: 90%;
            }
        }
    </style>
@endsection
