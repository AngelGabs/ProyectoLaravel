@extends('layout.main_template')

@section('content')
    <h1 class="title">Eliminar Cita</h1>

    <div class="warning-message">
        <p>¿Estás seguro de que deseas eliminar esta cita? Esta acción no se puede deshacer.</p>
    </div>

    <div class="details-container">
        <div class="detail-item">
            <strong>Paciente:</strong> {{ $cita->paciente->nombre ?? 'N/A' }} {{ $cita->paciente->apellido ?? '' }}
        </div>
        <div class="detail-item">
            <strong>Médico:</strong> {{ $cita->medico->nombre ?? 'N/A' }} ({{ $cita->medico->especialidad ?? '' }})
        </div>
        <div class="detail-item">
            <strong>Fecha:</strong> {{ $cita->fecha_cita ?? 'No especificada' }}
        </div>
        <div class="detail-item">
            <strong>Hora:</strong> {{ $cita->hora_cita ?? 'No especificada' }}
        </div>
        <div class="detail-item">
            <strong>Estado:</strong> {{ $cita->estado ?? 'N/A' }}
        </div>
    </div>

    <!-- Formulario para eliminar la cita -->
    <form action="{{ route('citas.destroy', $cita->id ?? '') }}" method="POST" class="delete-form">
        @csrf
        @method('DELETE')

        <div class="form-buttons">
            <!-- Botón para eliminar la cita -->
            <button type="submit" class="btn btn-danger">Eliminar Cita</button>
            <!-- Enlace para cancelar, redirige sin enviar el formulario -->
            <a href="{{ route('citas.index') }}" class="btn btn-secondary cancel-link">Cancelar</a>
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

    h1.title {
        font-size: 2.5em;
        text-align: center;
        color: #f44336;
        margin-bottom: 20px;
    }

    .warning-message {
        background-color: #ffebee;
        color: #f44336;
        padding: 15px;
        text-align: center;
        margin-bottom: 20px;
        font-size: 1.1em;
        border-radius: 5px;
    }

    .details-container {
        background-color: #fff;
        padding: 20px;
        margin: 20px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 60%;
    }

    .detail-item {
        font-size: 1.2em;
        margin-bottom: 15px;
    }

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

    .btn-danger {
        background-color: #f44336;
        color: white;
    }

    .btn-secondary {
        background-color: #4ca0af;
        color: white;
    }

    .btn-danger:hover,
    .btn-secondary:hover {
        opacity: 0.8;
    }

    .cancel-link {
        color: white;
        text-decoration: none;
    }

    /* Ajustes para pantallas pequeñas */
    @media (max-width: 768px)
