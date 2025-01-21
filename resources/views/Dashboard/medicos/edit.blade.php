@extends('layout.main_template')

@section('content')
    <h1>Editar Médico</h1>

    <!-- Mostrar errores generales -->
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

        <!-- Campo Nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $medico->nombre) }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- Campo Especialidad -->
        <label for="especialidad">Especialidad:</label>
        <input type="text" id="especialidad" name="especialidad" value="{{ old('especialidad', $medico->especialidad) }}">
        @error('especialidad')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- Campo Teléfono -->
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $medico->telefono) }}">
        @error('telefono')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- Campo Horario Disponible -->
        <label for="horario_disponible">Horario Disponible:</label>
        <input type="text" id="horario_disponible" name="horario_disponible" value="{{ old('horario_disponible', $medico->horario_disponible) }}">
        @error('horario_disponible')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- Botones -->
        <button type="submit">Actualizar</button>
        <a href="{{ route('medicos.index') }}" class="btn btn-secondary cancel-link">Cancelar</a>
    </form>

    <style>
        /* Mismos estilos de antes */
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

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        .alert-danger {
            background-color: #ffe6e6;
            padding: 10px;
            margin-top: -10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #f44336;
            color: #721c24;
            font-size: 1rem;
        }

        button {
            background-color: #006d77;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #005f73;
        }

        .cancel-link {
            text-decoration: none;
            color: white;
            background-color: #b8336a;
            padding: 10px 20px;
            border-radius: 8px;
            display: inline-block;
        }

        .cancel-link:hover {
            background-color: #a0275d;
        }
    </style>
@endsection
