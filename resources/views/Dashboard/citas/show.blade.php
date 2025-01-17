@extends('layout.main_template')

@section('content')

<h1>Detalles de la Cita</h1>

<div class="details-container">
    

    <div class="detail-item">

        <label>Paciente:</label>
        <p>{{ $cita->paciente->nombre }}</p>
    </div>
        

    <div class="detail-item">
        <label>Médico:</label>
        <p>{{ $cita->medico->nombre }}</p>
    </div>

    <div class="detail-item">
        <label>Fecha:</label>
        <p>{{ $cita->fecha_cita }}</p>
    </div>

    <div class="detail-item">
        <label>Hora:</label>
        <p>{{ $cita->hora_cita }}</p>
    </div>

    <div class="detail-item">
        <label>Estado:</label>
        <p>{{ $cita->estado }}</p>
    </div>
</div>

<!-- Botón de acción para volver al listado -->
<div class="action-buttons">
    <button class="btn btn-primary" onclick="window.location.href='{{ route('citas.index') }}'">Volver al listado</button>
</div>

@endsection

<!-- CSS Adicional -->
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
        font-weight: bold;
    }

    /* Contenedor de detalles de la cita */
    .details-container {
        width: 60%;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .detail-item {
        margin-bottom: 15px;
    }

    .detail-item label {
        display: block;
        font-size: 1rem;
        color: #005f73;
        font-weight: bold;
    }

    .detail-item p {
        font-size: 1.2rem;
        color: #333;
        margin: 5px 0;
    }

    /* Estilo del botón */
    .action-buttons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .action-buttons button {
        background-color: #006d77;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-size: 1.1em;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .action-buttons button:hover {
        background-color: #005f73;
    }

    /* Estilo para pantallas pequeñas */
    @media (max-width: 768px) {
        .details-container {
            width: 90%;
        }
    }
</style>

