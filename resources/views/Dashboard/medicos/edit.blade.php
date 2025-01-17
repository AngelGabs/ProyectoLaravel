@extends('layout.main_template')

@section('content')
    <h1>Editar Médico</h1>

    @if ($errors->any())
        <div class="error-messages">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('medicos.update', $medico->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $medico->nombre }}" required>
        <br>

        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" value="{{ $medico->especialidad }}" required>
        <br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $medico->telefono }}">
        <br>

        <label for="horario_disponible">Horario Disponible:</label>
        <input type="text" id="horario_disponible" name="horario_disponible" value="{{ $medico->horario_disponible }}">
        <br>

        <button type="submit">Actualizar</button>
        <button><a href="{{ route('medicos.index') }}">Cancelar</a></button>
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
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        form input[type="text"]:focus {
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

        /* Enlaces dentro del formulario */
        form button a {
            color: white;
            text-decoration: none;
        }

        form button a:hover {
            color: #ffdddd;
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
