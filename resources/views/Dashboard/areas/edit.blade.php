@extends('layout.main_template')

@section('content')

<h1>Editar Área</h1>

<!-- Mensaje de errores -->
@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{ $e }}
        </div>        
    @endforeach
@endif

<!-- Formulario para editar área -->
<form action="{{ route('areas.update', $area->id) }}" method="POST" class="form-container">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre del Área</label>
    <input type="text" name="nombre" value="{{ $area->nombre }}">

    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" rows="4">{{ $area->descripcion }}</textarea>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('areas.index') }}" class="cancel-button btn btn-secondary">Cancelar</a>
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

    /* Formulario */
    .form-container {
        width: 60%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container label {
        display: block;
        font-size: 1.1em;
        margin: 10px 0;
        color: #005f73;
    }

    .form-container input, .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 1em;
    }

    .form-container input:focus, .form-container textarea:focus {
        outline: none;
        border-color: #006d77;
        box-shadow: 0 0 5px rgba(0, 109, 119, 0.7);
    }

    /* Botones */
    .btn {
        display: inline-block;
        padding: 12px 30px;
        font-size: 1.1em;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        text-align: center;
        color: white;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #5d9baf;
    }

    .btn-secondary {
        background-color: #ccc;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .btn-primary:hover {
        background-color: #4a86a1;
    }

    .btn-secondary:hover {
        background-color: #b0b0b0;
    }

    /* Estilo de mensajes de error */
    .error {
        background-color: #ffe6e6;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #f44336;
        color: #f44336;
        font-size: 1.1em;
    }
</style>

