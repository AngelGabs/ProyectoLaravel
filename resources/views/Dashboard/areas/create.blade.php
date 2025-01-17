@extends('layout.main_template')

@section('content')

<h1>Crear Área</h1>

<!-- Mostrar errores si los hay -->
@if($errors->any())
    <div class="error-messages">
        @foreach ($errors->all() as $e)
            <p>{{ $e }}</p>
        @endforeach
    </div>        
@endif

<!-- Formulario para crear área -->
<form action="{{ route('areas.store') }}" method="POST" class="form-container">
    @csrf

    <label for="nombre">Nombre del Área</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required>

    <label for="descripcion">Descripción del Área</label>
    <textarea name="descripcion" rows="4">{{ old('descripcion') }}</textarea>

    <div class="form-buttons">
        <button type="submit" class="btn btn-primary">Registrar Área</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary cancel-link">Cancelar</a>
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
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        box-sizing: border-box;
    }

    form input[type="text"]:focus,
    form textarea:focus {
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

<!-- JavaScript para confirmación de eliminación -->
<script>
    // Agregar confirmación antes de eliminar
    function confirmDeletion(event) {
        if (!confirm('¿Estás seguro de eliminar esta área?')) {
            event.preventDefault();  // Evitar que se elimine si el usuario cancela
        }
    }

    // Asignar la función de confirmación a los formularios de eliminación
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', confirmDeletion);
    });
</script>

